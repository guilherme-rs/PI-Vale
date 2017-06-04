<?php

namespace App\Http\Controllers;

use App\Rotafuga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\Storage;

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
        $imagem = $request->file('rota');

        $pasta = public_path() . '/imagens';

        $nome_imagem = 'rota' . time() . '.' . $imagem->getClientOriginalExtension();

        // Move arquivo para pasta
        $nova_imagem = $imagem->move($pasta, $nome_imagem);
        $sub_var = substr($nova_imagem,31);

        $rotafugas = new Rotafuga();
        $rotafugas -> descricao  = Input::get('desc');
        $rotafugas -> mapa = $nome_imagem;
        $rotafugas -> caminhomapa = $sub_var;
        $rotafugas -> save();

        //return response()->json($rotafugas);

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
        $rota = Rotafuga::find($id);
        //return response()->json($rota);
        return view('rotafugas.edit',[
            'id' => $rota->id,
            'descricao' => $rota->descricao,
            'mapa' => $rota->mapa,
            'caminhomapa' => $rota->caminhomapa
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
        $imagem = $request->file('rotaNova');

        $pasta = public_path() . '/imagens';

        $nome_imagem = 'rota' . time() . '.' . $imagem->getClientOriginalExtension();

        // Move arquivo para pasta
        $nova_imagem = $imagem->move($pasta, $nome_imagem);
        $caminhomapa = substr($nova_imagem,31);


        $rotafugas = Rotafuga::find($id);
        $rotafugas -> caminhomapa = $caminhomapa;
        $rotafugas -> descricao  = Input::get('descricao');
        $rotafugas -> mapa = $nome_imagem;

        $rotafugas -> save();

        return redirect()->route('rotafugas.index');
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
        //return response()->json(array($rota->caminhomapa, $rota->mapa));
        unlink($rota->caminhomapa);
        $rota->delete();

        return redirect()->route('rotafugas.index');
    }
}
