@extends('layouts.main')
@section('titulo', 'Cadastro de Funcionario')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Funcionario </h1>

            <form method="post" action="{{ route('funcionarios.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{--<div class="form-group">
                    <label>Tipo de Pessoa </label><br>
                        <input type="radio" id="func"  name="tipoF">
                            <label for="func">Funcionario</label>
                        <input type="radio" id="visit" name="tipoV">
                            <label for="visit">Visitante</label>
                </div>--}}
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF: </label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group">
                    <label for="rg">RG: </label>
                    <input type="text" class="form-control" id="rg" name="rg">
                </div>
                <div class="form-group">
                    <label for="matricula">Matricula: </label>
                    <input type="text" class="form-control" id="matricula" name="matricula">
                </div>
                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="sala">Sala:</label>
                    <select name="sala" id="sala" class="form-control">
                        @forelse($salas as $item){
                            <option value="{{ $item -> id }}" id="sala" >{{ $item -> nome }}</option>
                        }
                        @empty{
                            <option disabled id="sala" > Nenhuma sala cadastrada. </option>
                        }
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="lider">Lider de Fuga: </label>
                    <input type="checkbox" id="lider" name="liderFuga">
                </div>
                <div class="form-group">
                    <label for="status">Status: </label>
                    <input type="checkbox" id="status" name="status">
                </div>
                {{--<div class="form-group">
                    <label for="auth">Autorização: </label>
                    <input type="checkbox" id="auth" name="autorizacao">
                </div>--}}
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection