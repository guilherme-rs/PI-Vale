@extends('layouts.main')
@section('titulo', 'Cadastro de Checklist')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Checklist </h1>

            <form method="post" action="{{ route('checklists.update',['id' => $id]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label>Pessoas: </label>
                    <select name="pessoa" class="form-control">
                        @forelse($pessoas as $item)
                            <option value="{{ $item -> id }}"> {{ $item -> nome }}</option>
                        @empty
                            <option disabled> Nenhum funcionario cadastrado </option>
                        @endforelse
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection