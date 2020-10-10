<?php

namespace App\Http\Controllers\Grupo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grupos;

class GrupoController extends Controller
{

    public function index()
    {
        Grupos::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $grupos = Grupos::create([
            'numero_da_conta' => $data['numero_da_conta'],
            'natureza_idnatureza' =>  $data['natureza_idnatureza'],
            'id_plano_de_contas' => $data['id_plano_de_contas'],
            'nome_da_conta' => $data['nome_da_conta']
        ]);

        return response()->json([
            'status' => true, 
            'data' => $grupos
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
