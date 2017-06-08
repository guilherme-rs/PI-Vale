@extends('layouts.main')
@section('titulo', 'Cadastro de Predios')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Predios </h1>

            <form method="post" action="{{ route('predios.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="latitude">Latitude: </label>
                    <input type="text" class="form-control" id="latitude" name="latitude">
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude: </label>
                    <input type="text" class="form-control" id="longitude" name="longitude">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection