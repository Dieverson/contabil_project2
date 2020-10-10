<?php

namespace App\Http\Controllers\Natureza;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Natureza;

class NaturezaController extends Controller
{
    public function index()
    {
        Natureza::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $natureza = Natureza::create([
            'nome_da_natureza' => $data['nome_da_natureza'],
        ]);

        return response()->json([
            'status' => true, 
            'data' => $natureza
        ]);
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
