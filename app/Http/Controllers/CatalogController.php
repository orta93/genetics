<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gene;
use App\Models\Test;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->where('section', 1)->get();
        return view('catalog.index')->with(['categories' => $categories]);
    }

    public function category($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if (!$category) {
            return redirect()->to(route('catalogo'));
        }

        $subcats = Category::where('parent_id', $category->id)->get();
        $tests = Test::where('category_id', $category->id)->orWhereIn('category_id', $subcats->pluck('id'))->get();

        return view('catalog.show')->with([
            'category' => $category,
            'subcategories' => $subcats,
            'tests' => $tests,
            'current' => null
        ]);
    }

    public function subcategory($category_slug, $subcategory_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        if (!$category) {
            return redirect()->to(route('catalogo'));
        }

        $subcategory = Category::where('slug', $subcategory_slug)->where('parent_id', $category->id)->first();

        $subcats = Category::where('parent_id', $category->id)->get();
        $tests = Test::where('category_id', $subcategory->id)->get();

        return view('catalog.show')->with([
            'category' => $category,
            'subcategories' => $subcats,
            'tests' => $tests,
            'current' => $subcategory
        ]);
    }

    public function test($test_code)
    {
        $test = Test::where('test_code', $test_code)->first();
        if (!$test) {
            return redirect()->to('/');
        }

        $genes = collect($test->genes);
        $genes = $genes->map(function ($gen) {
            $ids = $gen['genes'];
            $gen['items'] = Gene::whereIn('id', $ids)->orderBy('display_name')->get()->pluck('display_name');

            return $gen;
        });

        return view('catalog.test')->with(['test' => $test, 'genes' => $genes]);
    }
}
