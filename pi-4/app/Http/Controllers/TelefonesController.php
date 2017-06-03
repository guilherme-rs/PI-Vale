<?php

namespace App\Http\Controllers;

use App\Telefone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TelefonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefones = Telefone::get();
        return view('telefones.index', ['telefones' => $telefones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telefones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefone = new Telefone();
        $telefone -> numero = Input::get('numero');
        $telefone -> carrier = Input::get('carrier');
        $telefone -> descricao = Input::get('descricao');

        $telefone -> save();
        //return response()->json($telefone);
        return redirect()->route('telefones.index');
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
        $telefone = Telefone::find($id);
        return view('telefones.edit',[
            'id' => $telefone->id,
            'numero' => $telefone->numero,
            'carrier' => $telefone->carrier,
            'descricao' => $telefone->descricao,
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
        $telefone = Telefone::find($id);
        $telefone -> numero = Input::get('numero');
        $telefone -> carrier = Input::get('carrier');
        $telefone -> descricao = Input::get('descricao');

        $telefone -> save();

        return redirect()->route('telefones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telefone = Telefone::find($id);
        $telefone -> delete();
        return redirect()->route('telefones.index');
    }
}
