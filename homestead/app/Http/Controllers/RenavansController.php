<?php

namespace App\Http\Controllers;

use App\Renavan;
use App\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RenavansController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {
		$renavans = Renavan::get();
        return view('renavans.index', ['renavans' => $renavans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
		$veiculos = Veiculo::get();
        return view('renavans.create', ['veiculos' => $veiculos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {
        $renavan = new Renavan();
        $renavan->numero = Input::get('numero');
        $renavan->veiculo_id = Input::get('veiculo');
        $renavan->save();

        return redirect()->route('renavans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $renavan = Renavan::find($id);
		$veiculos = Veiculo::get();

        return view('renavans.edit', [
            'id' => $renavan->id,
            'numero' => $renavan->numero,
            'veiculo_id' => $renavan->veiculo_id,
			'veiculos' => $veiculos
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
        $renavan = Renavan::find($id);
        $renavan->numero = Input::get('numero');
        $renavan->veiculo_id = Input::get('veiculo');
        $renavan->save();

        return redirect()->route('renavans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {
        $renavan = Renavan::find($id);
        $renavan->delete();
        return redirect()->route('renavans.index');
    }
}
