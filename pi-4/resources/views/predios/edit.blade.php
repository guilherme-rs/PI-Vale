@extends('layouts.main')
@section('titulo', 'Atualização de Predios')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Atualização de Predios </h1>

            <form method="post" action="{{ route('predios.update', ['id' => $id]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $nome }}">
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection