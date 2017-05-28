<?php

namespace App\Http\Controllers;

use App\Predio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PrediosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predios = Predio::get();
        return view('predios.index', ['predios' => $predios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('predios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $predio = new Predio();
        $predio->nome = Input::get('nome');
        $predio->save();

        return redirect()->route('predios.index');
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
        $predio = Predio::find($id);
        return view('predios.edit',[
           'id' => $predio->id,
           'nome' => $predio->nome
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
        $predio = Predio::find($id);
        $predio->nome = Input::get('nome');
        $predio->save();

        return redirect()->route('predios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $predio = Predio::find($id);
        $predio->delete();

        return redirect()->route('predios.index');
    }
}
