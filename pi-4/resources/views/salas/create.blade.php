@extends('layouts.main')
@section('titulo', 'Cadastro de Sala')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Sala </h1>

            <form method="post" action="{{ route('salas.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="andar">Andar: </label>
                    <input type="text" class="form-control" id="andar" name="andar">
                </div>

                <div class="form-group">
                    <select name="predio" class="form-control">
                        @forelse($predios as $item){
                        <option value="{{ $item -> id }}" >{{ $item -> nome }}</option>
                        }
                        @empty{
                        <option disabled> Nenhum predio cadastrado. </option>
                        }
                        @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <select name="rota" class="form-control">
                        @forelse($rotas as $item){
                        <option value="{{ $item -> id }}" >{{ $item -> descricao }}</option>
                        }
                        @empty{
                        <option disabled> Nenhuma rota cadastrada. </option>
                        }
                        @endforelse
                    </select>
                </div>

                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection