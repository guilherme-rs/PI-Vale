<?php

namespace App\Http\Controllers\Api;

use App\Telefone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return Telefone::all();
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
    public function store(Request $request){
        $telefone = new Telefone();
        $telefone->numero = Input::get('numero');
        $telefone->carrier = Input::get('carrier');
        $telefone->descricao = Input::get('descricao');
        $telefone->save();
        return $telefone;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Telefone::find($id);
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
    public function update(Request $request, $id){
        $telefone = Telefone::find($id);

        if($telefone){
            $telefone->numero = Input::get('numero');
            $telefone->carrier = Input::get('carrier');
            $telefone->descricao = Input::get('descricao');
            $telefone->save();
            return $telefone;
        }
        return response()->json([
            'erro' => 'Sala inexistente'
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
        $telefone = Telefone::find($id);

        if($telefone){
            $telefone->delete();
            return response()->json([
                'mensagem' => 'Sala excluida'
            ]);
        }
        return response()->json([
            'erro' => 'Sala inexistente'
        ]);
    }
}
