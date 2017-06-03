@extends('layouts.main')
@section('titulo', 'Cadastro de Telefone')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Telefone </h1>

            <form method="post" action="{{ route('telefones.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="numero">Numero: </label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </div>
                <div class="form-group">
                    <label for="carrier">Carrier: </label>
                    <input type="text" class="form-control" id="carrier" name="carrier">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao">
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection