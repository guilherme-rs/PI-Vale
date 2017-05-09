@extends('layouts.principal')
@section('titulo', 'Cadastro de Mercadoria')
@section('conteudo')
    <h1> Cadastro de Mercadoria </h1>

    <form method="post" action="{{ route('mercadorias.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="codbarras">Codigo de Barras: </label>
        <input type="text" name="codigobarras" id="codbarras">
        <br>
        <label for="nf">Nota Fiscal: </label>
        <input type="text" name="notafiscal" id="nf">
        <br>
        <label for="destino">Destino: </label>
        <input type="text" name="destino" id="destino">
        <br>
		<label for="cliente">Cliente: </label>
        <input type="text" name="cliente_id" id="cliente">
        <br>
        <label for="veiculo">Veiculo: </label>
        <input type="text" name="veiculo_id" id="veiculo">
        <br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
@endsection