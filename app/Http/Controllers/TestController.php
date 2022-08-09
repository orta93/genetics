<?php

namespace App\Http\Controllers;

use App\Models\Gene;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $description = str_replace("\r\n", "<br>", $request->get('description'));
        $description = str_replace("<br><br><br>", "<br><br>", $description);

        $disorders_str = $request->get('disorders_str');
        $disorders = collect(explode("\r\n", $disorders_str))->map(function ($disorder) {
            return ucfirst($this->replaceText($disorder));
        })->toArray();
        $request['disorders'] = $disorders;

        $first_panel_items = explode(',', str_replace(' ', '', $request->get('first_panel')));
        $first_panel_ids = collect();
        foreach($first_panel_items as $item) {
            $gene = Gene::firstOrCreate(['name' => strtolower($item)], ['display_name' => $item]);
            if ($gene) {
                $first_panel_ids->push($gene->id);
            }
        }

        $genes = collect([
            ['name' => 'Panel primario', 'genes' => $first_panel_ids->toArray()]
        ]);

        if ($request->filled('second_panel_name') && $request->filled('second_panel')) {
            $second_panel_items = explode(',', str_replace(' ', '', $request->get('second_panel')));
            $second_panel_ids = collect();
            foreach ($second_panel_items as $item) {
                $gene = Gene::firstOrCreate(['name' => strtolower($item)], ['display_name' => $item]);
                if ($gene) {
                    $second_panel_ids->push($gene->id);
                }
            }

            if ($second_panel_ids->count()) {
                $genes->push(['name' => $this->replaceText($request->get('second_panel_name')), 'genes' => $second_panel_ids->toArray()]);
            }
        }

        if ($request->filled('third_panel_name') && $request->filled('third_panel')) {
            $third_panel_items = explode(',', str_replace(' ', '', $request->get('third_panel')));
            $third_panel_ids = collect();
            foreach ($third_panel_items as $item) {
                $gene = Gene::firstOrCreate(['name' => strtolower($item)], ['display_name' => $item]);
                if ($gene) {
                    $third_panel_ids->push($gene->id);
                }
            }

            if ($third_panel_ids->count()) {
                $genes->push(['name' => $this->replaceText($request->get('third_panel_name')), 'genes' => $third_panel_ids->toArray()]);
            }
        }

        Test::create([
            'name' => $this->replaceText($request->get('name')),
            'category_id' => $request->get('category_id'),
            'description' => $this->replaceText($description),
            'test_code' => $request->get('test_code'),
            'disorders' => $disorders,
            'turnaround' => $request->get('turnaround'),
            'preferred_specimen' => $request->get('preferred_specimen'),
            'alternate_specimens' => $request->get('alternate_specimens'),
            'genes' => $genes->toArray()
        ]);

        return redirect()->to('/test/create');
    }

    private function replaceText($string)
    {
        $string = str_replace('Invitae', env('APP_NAME'), $string);
        $string = str_replace('invitae', env('APP_NAME'), $string);

        return $string;
    }

    public function fix()
    {
        $tests = Test::all();
        foreach ($tests as $test) {
            $genes = collect();

            $has_change = false;
            foreach ($test->genes as $gene) {
                if ($model = Gene::whereIn('id', $gene['genes'])->first()) {
                    $remove = str_replace(' ', '', $model->display_name);
                    $explode = explode(',', $remove);

                    if (count($explode) > 1) {
                        $has_change = true;
                        $new_genes = collect();
                        foreach ($explode as $item) {
                            try {
                                $item = $this->removeAccents($item);
                                if ($item != '') {
                                    $new_gene = Gene::firstOrCreate(['name' => strtolower($item)], ['display_name' => $item]);
                                    if ($new_gene) {
                                        $new_genes->push($new_gene->id);
                                    }
                                }
                            } catch (\Exception $e) {
                                dd($e);
                            }
                        }

                        $genes->push(['name' => $gene['name'], 'genes' => $new_genes->toArray()]);
                    } elseif ($explode[0] == '') {
                        $has_change = true;
                        $genes->push(['name' => $gene['name'], 'genes' => []]);
                    } else {
                        $genes->push($gene);
                    }
                }
            }

            if ($has_change) {
                echo $test->id . '<br>';
                Test::where('id', $test->id)->update(['genes' => $genes]);
            }

            $disorders = collect();
            foreach ($test->disorders as $disorder) {
                if ($disorder !== '') {
                    $disorders->push($disorder);
                }
            }

            if ($disorders->count() !== count($test->disorders)) {
                Test::where('id', $test->id)->update(['disorders' => $disorders]);
            }
        }
    }

    private function removeAccents($str)
    {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }
}
