@extends('layouts.principal')
@section('titulo', 'Cadastro de Mercadoria')
@section('conteudo')
	<div class="container">
		<h1> Cadastro de Mercadoria </h1>

		<form method="post" action="{{ route('mercadorias.store') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
                <label for="codbarras">Codigo de Barras:</label>
                <input type="text" class="form-control" id="codbarras" placeholder="Digite o codigo de barras" name="codbarras">
            </div>
			<div class="form-group">
                <label for="marca">Nota Fiscal:</label>
                <input type="text" class="form-control" id="marca" placeholder="Digite a nota fiscal" name="marca">
            </div>
			<div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" class="form-control" id="destino" placeholder="informe o endereço de entrega" name="destino">
            </div>
			<div class="form-group">
                <label for="cliente">Cliente:</label>
                <input type="text" class="form-control" id="cliente" placeholder="Informe o cliente" name="cliente">
            </div>
			<div class="form-group">
                <label for="veiculo">Veiculo:</label>
                <input type="text" class="form-control" id="veiculo" placeholder="Informe o veiculo" name="veiculo">
            </div>
			<button type="submit" class="btn btn-default">Cadastrar</button>
		</form>
	</div>
@endsection