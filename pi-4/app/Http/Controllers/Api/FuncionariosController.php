<?php

namespace App\Http\Controllers\Api;

use App\Funcionario;
use App\Pessoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Funcionario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome = Input::get('nome');
        $pessoa->cpf = Input::get('cpf');
        $pessoa->rg = Input::get('rg');
        $pessoa->email = Input::get('email');
        $pessoa->save();

        $funcionario = new Funcionario();
        $funcionario->matricula = Input::get('matricula');
        $funcionario->senha = Input::get('matricula');
        $funcionario->liderFuga = (bool)Input::get('liderFuga');
        $funcionario->pessoa_id = $pessoa->id;
        $funcionario->sala_id = Input::get('sala');
        $funcionario->save();

        return $funcionario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Funcionario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        if($funcionario) {
            $pessoa = Pessoa::find($funcionario->pessoa_id);

            $pessoa->nome = Input::get('nome');
            $pessoa->cpf = Input::get('cpf');
            $pessoa->rg = Input::get('rg');
            $pessoa->email = Input::get('email');

            $pessoa->save();


            $funcionario->matricula = Input::get('matricula');
            $funcionario->senha = Input::get('matricula');
            $funcionario->liderFuga = (bool)Input::get('liderFuga');
            $funcionario->pessoa_id = $pessoa->id;
            $funcionario->sala_id = Input::get('sala');
            $funcionario->save();
        }

        return $funcionario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        if($funcionario){
            $funcionario->delete();
            return response()->json([
                'mensagem' => 'Funcioanrio excluido'
            ]);
        }

        return response()->json([
            'erro' => 'Funcioanrio inexistente'
        ]);
    }
}
