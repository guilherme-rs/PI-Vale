<?php

namespace App\Http\Controllers;

use App\Funcionario;
use App\Pessoa;
use App\Sala;
use App\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::get();
        $pessoas = Pessoa::get();
        //$visitantes = Visitante::get();

        return view('funcionarios.index', [
            'funcionarios' => $funcionarios,
            'pessoas' => $pessoas,
            //'visitantes' => $visitantes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas = Sala::get();
        return view('funcionarios.create',[
            'salas' => $salas]);
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

        return redirect()->route('funcionarios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        $pessoa = Pessoa::find($funcionario -> pessoa_id);
        $salas = Sala::get();
        return view('funcionarios.edit',[
            'id' => $funcionario -> id,
            'nome' => $pessoa -> nome,
            'cpf' => $pessoa -> cpf,
            'rg' => $pessoa -> rg,
            'email' => $pessoa -> email,
            'matricula' => $funcionario -> matricula,
            'liderFuga' => $funcionario -> liderFuga,
            'sala_id' => $funcionario -> sala_id,
            'salas' => $salas
        ]);


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
        $pessoa = Pessoa::find($funcionario -> pessoa_id);

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

        return redirect()->route('funcionarios.index');
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
        $funcionario -> delete();
        return redirect()->route('funcionarios.index');
    }
}
