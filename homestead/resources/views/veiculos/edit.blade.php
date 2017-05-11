@extends('layouts.principal')
@section('titulo', 'Atualização de Veiculo')
@section('conteudo')
	
	<div class="container">
		<h1> Atualização do Veiculo {{ $modelo }}</h1>
	
		<form method="post" action="{{ route('veiculos.update', ['id' => $id]) }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
                <label for="marca">Marca: </label>
                <input type="text" class="form-control" id="marca" value="{{ $marca }}" name="marca">
            </div>
			<div class="form-group">
                <label for="modelo">Modelo: </label>
                <input type="text" class="form-control" id="modelo" value="{{ $modelo }}" name="modelo">
            </div>
			<div class="form-group">
                <label for="cor">Cor: </label>
                <input type="text" class="form-control" id="cor" value="{{ $cor }}" name="cor">
            </div>
			<div class="form-group">
                <label for="placa">Placa: </label>
                <input type="text" class="form-control" id="placa" value="{{ $placa }}" name="placa">
            </div>
			<div class="form-group">
                <label for="combustivel">Combustivel:</label>
                <input type="text" class="form-control" id="combustivel" value="{{ $combustivel }}" name="combustivel">
            </div>
			<button type="submit" class="btn btn-default">Cadastrar</button>
		</form>
	</div>
@endsection