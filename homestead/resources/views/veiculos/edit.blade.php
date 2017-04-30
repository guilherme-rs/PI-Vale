@extends('layouts.principal')
@section('titulo', 'Cadastro de Veiculo')
@section('conteudo')
    <h1> Cadastro de Veiculo </h1>

    <form method="post" action="{{ route('veiculos.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="marca">Marca: </label>
        <input type="text" name="marca" id="marca">
        <br>
        <label for="modelo">Modelo: </label>
        <input type="text" name="modelo" id="modelo">
        <br>
        <label for="cor">Cor: </label>
        <input type="text" name="cor" id="cor">
        <br>
        <label for="placa">Placa: </label>
        <input type="text" name="placa" id="placa">
        <br>
        <label for="combustivel">Combustivel: </label>
        <input type="text" name="combustivel" id="combustivel">
        <br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
@endsection