@extends('layouts.main')
@section('titulo', 'Atualização de Incidentes')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Atualização de Incidentes </h1>

            <form method="post" action="{{ route('incidentes.update',['id' => $id]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <input type="date" name="data" value="{{ $data }}" disabled>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $descricao }}">
                </div>
                <div class="form-group">
                    <label for="descricao">Alerta de abondono: </label>
                    @if($alerta === 'Sim')
                        <input type="checkbox" id="alerta" name="alerta" checked>
                    @else
                        <input type="checkbox" id="alerta" name="alerta">
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection