@extends('layouts.principal')
@section('titulo', 'Cadastro de Clientes')
@section('conteudo')
    <h1> Cadastro de Clientes </h1>

    <form method="post" action="{{ route('clientes.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="razao">Razão Social: </label>
        <input type="text" name="razao" id="razao">
        <br>
        <label for="nome_fantasia">Nome Fantasia: </label>
        <input type="text" name="nome_fantasia" id="nome_fantasia">
        <br>
        <label for="cnpj">CNPJ: </label>
        <input type="text" name="cnpj" id="cnpj">
        <br>
        <label for="email">E-Mail: </label>
        <input type="text" name="email" id="email">
        <br>
        <label for="ativo">Ativo: </label>
        <input type="checkbox" name="ativo" id="ativo">
        <br>
        <label for="obs">observação: </label><br>
        <textarea cols="50" rows="5" name="obs" id="obs"></textarea>
        <br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
@endsection