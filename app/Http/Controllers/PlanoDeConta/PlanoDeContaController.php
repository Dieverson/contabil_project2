<?php

namespace App\Http\Controllers\PlanoDeConta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\plano_de_contas;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class PlanoDeContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = plano_de_contas::all();

        if(isset($data)) {
            return response()->json([
                'status' => true,
                $data
            ]);
        }

        return Response()->json([
            'status' => false,
            'error' => 'error'
        ]);
    }


    public function create()
    {
        //
    }

    protected function validator(array $data)
    {
        $rules =  ['nome_plano_de_conta' => 'max:255',];
        $customMessages =['max' => 'O :attribute pode ter no máximo :max caracteres'];
        return Validator::make($data,$rules,$customMessages);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = $this->validator($data);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

        plano_de_contas::create([
            'nome_plano_de_conta' => $data['nome_plano_de_conta']
        ]);

        return Response()->json([
            'status' => true,
            'data' => $data
        ]);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
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
