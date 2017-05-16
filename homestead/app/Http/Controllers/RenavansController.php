<?php

namespace App\Http\Controllers;

use App\Renavan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RenavansController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {
        return view('motoristas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {

        return view('motoristas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {
        $motorista = new Motorista();
        $motorista->nome = Input::get('nome');
        $motorista->cnh = Input::get('cnh');
        $motorista->idade = Input::get('idade');
        $motorista->habilitacao = Input::get('habilitacao');
        $motorista->save();

        return redirect()->route('motoristas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {
        $motorista = Motorista::find($id);
        return view('motoristas.detalhes', ['motorista' => $motorista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $motorista = Motorista::find($id);

        return view('motoristas.edit', [
            'id' => $motorista->id,
            'nome' => $motorista->nome,
            'cnh' => $motorista->cnh,
            'idade' => $motorista->idade,
            'habilitacao' => $motorista->habilitacao
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        $motorista = Motorista::find($id);
        $motorista->nome = Input::get('nome');
        $motorista->cnh = Input::get('cnh');
        $motorista->idade = Input::get('idade');
        $motorista->habilitacao = Input::get('habilitacao');
        $motorista->save();

        return redirect()->route('motoristas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {
        $motorista = Motorista::find($id);
        $motorista->delete();
        return redirect()->route('motoristas.index');
    }
}
