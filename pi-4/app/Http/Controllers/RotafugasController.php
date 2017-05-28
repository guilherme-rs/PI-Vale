<?php

namespace App\Http\Controllers;

use App\Rotafuga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

class RotafugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rota = Rotafuga::get();
        return view('rotafugas.index', ['rotas' => $rota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rotafugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rota = new Rotafuga();
        $rota->descricao = Input::get('desc');
        $rota->mapa = "";
        $rota->caminhomapa = "";
        $rota->save();

        return redirect()->route('rotafugas.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rota = Rotafuga::find($id);
        $rota->delete();

        return redirect()->route('rotafugas.index');
    }
}
