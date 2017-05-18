@extends('layouts.principal')
@section('titulo', 'Cadastro de Veiculo')
@section('conteudo')
    <div class="container">
		<div class="col-xs-8">
			<h2>Cadastro de Veiculo</h2>
			<form method="post" action="{{ route('veiculos.store') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="marca">Marca:</label>
					<input type="text" class="form-control" id="marca" placeholder="Digite a marca" name="marca">
				</div>
				<div class="form-group">
					<label for="modelo">Modelo:</label>
					<input type="text" class="form-control" id="modelo" placeholder="Digite o modelo" name="modelo">
				</div>
				<div class="form-group">
					<label for="cor">Cor:</label>
					<input type="text" class="form-control" id="cor" placeholder="Digite a cor" name="cor">
				</div>
				<div class="form-group">
					<label for="placa">Placa:</label>
					<input type="text" class="form-control" id="placa" placeholder="Digite a placa" name="placa">
				</div>
				<div class="form-group">
					<label for="combustivel">Combustivel:</label>
					<input type="text" class="form-control" id="combustivel" placeholder="Informe o tipo de combustivel" name="combustivel">
				</div>
				<button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
		</div>
	</div>
@endsection