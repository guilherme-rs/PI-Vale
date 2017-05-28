<?php

namespace App\Http\Controllers;

use App\Predio;
use App\Rotafuga;
use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::get();
        return view('salas.index', ['salas' => $salas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $predios = Predio::get();
        $rotas = Rotafuga::get();
        return view('salas.create',[
            'predios' => $predios,
            'rotas' => $rotas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sala = new Sala();
        $sala->nome = Input::get('nome');
        $sala->andar = Input::get('andar');
        $sala->predio_id = Input::get('predio');
        $sala->rotafuga_id = Input::get('rota');
        $sala->save();

        return redirect()->route('salas.index');
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
        $sala = Sala::find($id);
        $predios = Predio::get();
        $rotas = Rotafuga::get();

        return view('salas.edit',[
            'id' => $sala->id,
            'nome' => $sala->nome,
            'andar' => $sala->andar,
            'predio' => $sala->predio_id,
            'rota' => $sala->rotafuga_id,
            'predios' => $predios,
            'rotas' => $rotas
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
        $sala = Sala::find($id);
        $sala->nome = Input::get('nome');
        $sala->andar = Input::get('andar');
        $sala->predio_id = Input::get('predio');
        $sala->rotafuga_id = Input::get('rota');
        $sala->save();

        return redirect()->route('salas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
