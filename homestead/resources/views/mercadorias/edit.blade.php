@extends('layouts.principal')
@section('titulo', 'Atualização de Mercadoria')
@section('conteudo')

    <h1> Atualização de Mercadoria </h1>

    <form method="post" action="{{ route('mercadorias.update', ['id' => $id]) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <label for="codbarras">Codigo de Barras: </label>
        <input type="text" name="codigobarras" id="codbarras" value="{{ $codigobarras }}">
        <br>
        <label for="nf">Nota Fiscal: </label>
        <input type="text" name="notafiscal" id="nf" value="{{ $notafiscal }}">
        <br>
        <label for="destino">Destino: </label>
        <input type="text" name="destino" id="destino" value="{{ $destino }}">
        <br>
        <label for="cliente">Cliente: </label>
        <input type="text" name="cliente_id" id="cliente" value="{{ $cliente_id }}">
        <br>
        <label for="veiculo">Veiculo: </label>
        <input type="text" name="veiculo_id" id="veiculo" value="{{ $veiculo_id }}">
        <br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
@endsection