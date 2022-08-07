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
            return $this->replaceText($disorder);
        })->toArray();
        $request['disorders'] = $disorders;

        $first_panel_items = explode(', ', $request->get('first_panel'));
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
            $second_panel_items = explode(', ', $request->get('second_panel'));
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
            $third_panel_items = explode(', ', $request->get('third_panel'));
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
            'genes' => $genes->toArray(),
            'color' => $request->get('color')
        ]);

        return redirect()->to('/test/create');
    }

    private function replaceText($string)
    {
        $string = str_replace('Invitae', env('APP_NAME'), $string);
        $string = str_replace('invitae', env('APP_NAME'), $string);

        return $string;
    }
}
