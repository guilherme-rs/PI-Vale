@extends('layouts.principal')
@section('titulo', 'Atualização de Veiculo')
@section('conteudo')

    <h1> Editar Veiculo </h1>

    <form method="post" action="{{ route('veiculos.update', ['id' => $id]) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="{{ $marca }}">
        <br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" value="{{ $modelo }}">
        <br>
        <label for="cor">Cor:</label>
        <input type="text" name="cor" id="cor" value="{{ $cor }}">
        <br>
        <label for="placa">Placa:</label>
        <input type="text" name="placa" id="placa" value="{{ $placa }}">
        <br>
        <label for="combustivel">Combustivel:</label>
        <input type="text" name="combustivel" id="combustivel" value="{{ $combustivel }}">
        <br>
        <input class="button" type="submit" name="salvar" value="Cadastrar"/>
    </form>

@endsection