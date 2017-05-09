<?php

namespace App\Http\Controllers;

use App\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class VeiculosController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$veiculo = Veiculo::all();
        //return view('veiculos.index', $veiculo);
        return view('veiculos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('veiculos.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $veiculo = new Veiculo();
        $veiculo->placa = Input::get('placa');
        $veiculo->marca = Input::get('marca');
        $veiculo->modelo = Input::get('modelo');
        $veiculo->cor = Input::get('cor');
        $veiculo->combustivel = Input::get('combustivel');
        $veiculo->save();

        return redirect()->route('veiculos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $veiculo = Veiculo::find($id);
        return view('veiculos.destroy', ['veiculo'=>$veiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $veiculo = Veiculo::find($id);
        return view('veiculos.edit', [
            'id' => $veiculo->id,
            'placa' => $veiculo->placa,
            'marca' => $veiculo->marca,
            'modelo' => $veiculo->modelo,
            'cor' => $veiculo->cor,
            'combustivel' => $veiculo->combustivel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id) {
        $veiculo = Veiculo::find($id);
        $veiculo->placa = Input::get('placa');
        $veiculo->marca = Input::get('marca');
        $veiculo->modelo = Input::get('modelo');
        $veiculo->cor = Input::get('cor');
        $veiculo->combustivel = Input::get('combustivel');
        $veiculo->save();

        return redirect()->route('veiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();

        return redirect()->route('veiculos.index');
    }

    public function json() {
        /*
        $mercadorias = [
            [
                'nome' => 'mer1',
                'tipo' => 'celular'
            ],
            [
                'nome' => 'mer2',
                'tipo' => 'computador'
            ]
        ]
    ;

        //$mercadorias = DB::select('select * from mercadorias');
        //DB::update('update mercadorias set destino =? where id =?', ['Rua A', 1]);

        DB::insert('insert into mercadorias (codigobarras, notafiscal, destino, cliente_id, veiculo_id)
                            values(:codigobarras, :notafiscal, :destino, :cliente_id, :veiculo_id)',
                            [
                              'codigobarras' =>'3456789012',
                              'notafiscal' => '654321',
                              'destino' => 'Rua B',
                              'cliente_id' => 1,
                              'veiculo_id' => 1
                            ]);


        DB::table('mercadorias')
            ->where('id', 2)
            ->orWhere('id', 3)
            ->update([
                'veiculo_id' => 2
            ]);

        DB::table('mercadorias')
            ->insert([
                'codigobarras' =>'1234567890234',
                'notafiscal' => '456123',
                'destino' => 'Rua C',
                'cliente_id' => 1,
                'veiculo_id' => 2
            ]);

        $mercadoriasKombi = DB::table('mercadorias')
            ->where('veiculo_id', 2)
            ->get();

        */
        $mercadorias = Mercadoria::where('veiculo_id', 2)->get();
        return response()->json($mercadorias);
    }

}
