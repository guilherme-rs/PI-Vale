@extends('layouts.main')
@section('titulo', 'Cadastro de Checklist')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Checklist </h1>

            <form method="post" action="{{ route('checklists.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="data">Data do Ocorrido: </label>
                    <input type="date" class="form-control" id="data" name="data">
                </div>
                <div class="form-group">
                    <label for="estado">Estado: </label>
                    <input type="text" class="form-control" id="estado" name="estado">
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection