<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clliente = new Cliente();
        $clliente->razao = Input::get('razao');
        $clliente->nome_fantasia = Input::get('nome_fantasia');
        $clliente->cnpj = Input::get('cnpj');
        $clliente->email = Input::get('email');
        $clliente->ativo = (bool)Input::get('ativo');
        $clliente->obs = Input::get('obs');
        $clliente->save();

        return redirect()->route('clientes.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.destroy', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', [
            'id' => $cliente->id,
            'razao' => $cliente->razao,
            'nome_fantasia' => $cliente->nome_fantasia,
            'cnpj' => $cliente->cnpj,
            'email' => $cliente->email,
            'ativo' => $cliente->ativo,
            'obs' => $cliente->obs
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
        $clliente = Cliente::find($id);
        $clliente->razao = Input::get('razao');
        $clliente->nome_fantasia = Input::get('nome_fantasia');
        $clliente->cnpj = Input::get('cnpj');
        $clliente->email = Input::get('email');
        $clliente->ativo = (bool)Input::get('ativo');
        $clliente->obs = Input::get('obs');
        $clliente->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
