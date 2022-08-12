<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show(Request $request)
    {
        if ($request->filled('q')) {
            if ($decrypted = base64_decode($request->get('q'))) {
                if ($item = json_decode($decrypted)) {
                    return view('resultados', ['item' => $item]);
                }
            }
        }

        return redirect()->to('/');
    }
}
