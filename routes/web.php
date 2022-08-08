<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/test/create', function () {
    $categories = \App\Models\Category::orderBy('name')->get();
    return view('test_form', ['categories' => $categories]);
});

Route::post('/test/create', [TestController::class, 'store']);

Route::group(['prefix' => 'embarazo'], function () {
    Route::get('/', function () {
        return view('embarazo.index');
    })->name('embarazo');

    Route::get('/cribado-de-portadores', function () {
        return view('embarazo.cribado');
    })->name('cribado-de-portadores');

    Route::get('/prueba-preimplantacion-fiv', function () {
        return view('embarazo.prueba-preimplantacion-fiv');
    })->name('prueba-preimplantacion-fiv');

    Route::get('/gestion-personalizada-medicamentos', function () {
        return view('embarazo.gestion-personalizada-medicamentos');
    })->name('gestion-personalizada-medicamentos');

    Route::get('/cribado-prenatal-no-invasivo', function () {
        return view('embarazo.cribado-prenatal-no-invasivo');
    })->name('cribado-prenatal-no-invasivo');

    Route::get('/pruebas-diagnostico-prenatal', function () {
        return view('embarazo.pruebas-diagnostico-prenatal');
    })->name('pruebas-diagnostico-prenatal');
});

Route::group(['prefix' => 'wellness'], function () {
    Route::get('/', function () {
        return view('saludable.index');
    })->name('saludable');

    Route::get('/porque-genes-importan', function () {
        return view('saludable.porque-genes-importan');
    })->name('saludable.porque-genes-importan');

    Route::get('/como-funcionan-pruebas', function () {
        return view('saludable.como-funcionan-pruebas');
    })->name('saludable.como-funcionan-pruebas');

    Route::get('/acerca-de-pruebas', function () {
        return view('saludable.acerca-de-pruebas');
    })->name('saludable.acerca-de-pruebas');
});

Route::group(['prefix' => 'cancer'], function () {
    Route::get('/', function () {
        return view('cancer.index');
    })->name('cancer');

    Route::get('/porque-genes-importan', function () {
        return view('cancer.porque-genes-importan');
    })->name('cancer.porque-genes-importan');

    Route::get('/como-funcionan-pruebas', function () {
        return view('cancer.como-funcionan-pruebas');
    })->name('cancer.como-funcionan-pruebas');

    Route::get('/acerca-de-pruebas', function () {
        return view('cancer.acerca-de-pruebas');
    })->name('cancer.acerca-de-pruebas');

    Route::get('/gestion-personalizada-medicacion', function () {
        return view('cancer.gestion-personalizada-medicacion');
    })->name('cancer.gestion-personalizada-medicacion');
});

Route::group(['prefix' => 'enfermedades-geneticas'], function () {
    Route::get('/', function () {
        return view('enfermedades.index');
    })->name('enfermedades');

    Route::get('/como-funcionan-pruebas', function () {
        return view('enfermedades.como-funcionan-pruebas');
    })->name('enfermedades.como-funcionan-pruebas');

    Route::get('/porque-genes-importan', function () {
        return view('enfermedades.porque-genes-importan');
    })->name('enfermedades.porque-genes-importan');
});

Route::group(['prefix' => 'catalogo'], function () {
    Route::get('/', [CatalogController::class, 'index'])->name('catalogo');

    Route::get('/prueba/{test_code}', [CatalogController::class, 'test'])->name('catalogo.test');
    Route::get('/{category_slug}', [CatalogController::class, 'category'])->name('catalogo.categoria');
    Route::get('/{category_slug}/{subcategory_slug}', [CatalogController::class, 'subcategory'])->name('catalogo.categoria.sub');
});