<?php

namespace App\Http\Controllers\Conta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contas;

class ContaController extends Controller
{

    public function index()
    {
        Contas::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $conta = Contas::create([
            'numero_da_conta' => $data['numero_da_conta'],
            'nome_da_conta' =>  $data['nome_da_conta'],
            'sub_grupos_idsub_grupos' => $data['sub_grupos_idsub_grupos'],
            'natureza_idnatureza' => $data['natureza_idnatureza']
        ]);

        return response()->json([
            'status' => true, 
            'data' => $conta
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
