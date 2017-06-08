<?php

namespace App\Http\Controllers\Api;

use App\Predio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return Predio::all();
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
        $predio = new Predio();
        $predio = Input::get('nome');
        $predio->save();
        return $predio;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Predio::find($id);
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
        $predio = Predio::find($id);
        if($predio) {
            $predio->nome = Input::get('nome');
            $predio->save();
        }
        return response()->json([
            'erro'=> 'Predio inexistente'
        ]);
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
        if($predio){
            $predio->delete();
            return response()->json([
                'mensagem' => 'Predio excluido'
            ]);
        }

        return response()->json([
            'erro'=> 'Predio inexistente'
        ]);
    }

    public function salas($id)
    {
        $predios = Predio::find($id);
        return $predios-> salas;
    }
}
