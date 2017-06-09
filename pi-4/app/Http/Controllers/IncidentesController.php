<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Incidente;
use App\Pessoa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IncidentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidentes = Incidente::get();
        return view('incidentes.index', ['incidentes' => $incidentes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoa::get();
        return view('incidentes.create', ['pessoas' => $pessoas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidente = new Incidente();
        $incidente->descricao = Input::get('descricao');
        $incidente->alertaAbandono = (bool)Input::get('alerta');
        $incidente->pessoa_id = Input::get('pessoa');
        $incidente->data = Carbon::now()->format('Y-m-d');
//        return response()->json($incidente);
        $incidente->save();

        if((bool)Input::get('alerta') === true){
            $checklist = new Checklist();
            $checklist->incidente_id = $incidente->id;
            $checklist->pessoa_id = Input::get('pessoa');
//            return response()->json($checklist);
            $checklist->save();
        }

        return redirect()->route('incidentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $checklist = Checklist::where('incidente_id', '=', $id)->get();
//        return response()->json($checklist);
        return view('incidentes.show', [
            'checklist' => $checklist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidente = Incidente::find($id);
//        return response()->json($incidente);
        return view('incidentes.edit', [
            'id' => $incidente->id,
            'descricao' => $incidente->descricao,
            'alerta' => $incidente->alertaAbandono,
            'data' => $incidente->data,
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
        $incidente = Incidente::find($id);
        $incidente->descricao = Input::get('descricao');
        $incidente->alertaAbandono = (bool)Input::get('alerta');
        $incidente->data = Input::get('data');
        return response()->json($incidente);
        $incidente->save();

        return redirect()->route('incidentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidente = Incidente::find($id);
        $incidente->delete();

        return redirect()->route('incidentes.index');
    }
}