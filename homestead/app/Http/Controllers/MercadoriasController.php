<?php

namespace App\Http\Controllers;

use App\Mercadoria;
use App\Cliente;
use App\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MercadoriasController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {
		$mercadorias = Mercadoria::get();
        return view('mercadorias.index', ['mercadorias' => $mercadorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
		$veiculos = Veiculo::get();
		$clientes = Cliente::get();

		return view('mercadorias.criar', ['clientes' => $clientes,'veiculos' => $veiculos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {
        $mercadoria = new Mercadoria();
        $mercadoria->codigobarras = Input::get('codbarras');
        $mercadoria->notafiscal = Input::get('nf');
        $mercadoria->destino = Input::get('destino');
        $mercadoria->cliente_id = Input::get('cliente');
        $mercadoria->veiculo_id = Input::get('veiculo');
        $mercadoria->save();

        return redirect()->route('mercadorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)    {
        $mercadorias = Mercadoria::find($id);
        return view('mercadorias.detalhes', ['mercadoria' => $mercadorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $mercadoria = Mercadoria::find($id);
		$veiculos = Veiculo::get();
		$clientes = Cliente::get();

        return view('mercadorias.edit', [
            'id' => $mercadoria->id,
            'codigobarras' => $mercadoria->codigobarras,
            'notafiscal' => $mercadoria->notafiscal,
            'destino' => $mercadoria->destino,
            'cliente_id' => $mercadoria->cliente_id,
            'veiculo_id' => $mercadoria->veiculo_id,
			'clientes' => $clientes,
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
        $mercadoria = Mercadoria::find($id);
        $mercadoria->codigobarras = Input::get('codbarras');
        $mercadoria->notafiscal = Input::get('nf');
        $mercadoria->destino = Input::get('destino');
        $mercadoria->cliente_id = Input::get('cliente');
        $mercadoria->veiculo_id = Input::get('veiculo');
        $mercadoria->save();

        return redirect()->route('mercadorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {
        $mercadoria = Mercadoria::find($id);
        $mercadoria->delete();
        return redirect()->route('mercadorias.index');
    }

    public function json(){
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
        //$mercadorias = Mercadoria::where('veiculo_id', 2)->get();
        //$mercadorias = Mercadoria::onlyTrashed()->get();
        $mercadorias = Mercadoria::get();
		return response()->json($mercadorias, 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
