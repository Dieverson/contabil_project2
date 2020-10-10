<?php

namespace App\Http\Controllers\SubGrupo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubGrupo;

class SubGrupoController extends Controller
{
    public function index()
    {
        SubGrupo::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $subGrupo = SubGrupo::create([
            'numero_da_conta' => $data['numero_da_conta'],
            'nome_da_conta' => $data['nome_da_conta'],
            'grupos_idgrupos' => $data['grupos_idgrupos'],
            'natureza_idnatureza' => $data['natureza_idnatureza'],
        ]);

        return response()->json([
            'status' => true, 
            'data' => $subGrupo
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
