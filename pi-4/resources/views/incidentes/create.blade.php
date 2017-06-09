@extends('layouts.main')
@section('titulo', 'Cadastro de Incidentes')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Incidentes </h1>

            <form method="post" action="{{ route('incidentes.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Funcionario: </label>
                    <select name="pessoa" class="form-control">
                        @forelse($pessoas as $item)
                            <option value="{{ $item -> id }}"> {{ $item -> nome }}</option>
                        @empty
                            <option disabled> Nenhum funcionario cadastrado </option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao">
                </div>
                <div class="form-group">
                    <label for="descricao">Alerta de abondono: </label>
                    <input type="checkbox" id="alerta" name="alerta">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection