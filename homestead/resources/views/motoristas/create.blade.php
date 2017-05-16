@extends('layouts.principal')
@section('titulo', 'Cadastro de Motorista')
@section('conteudo')
	<div class="container">
		<div class="col-xs-8">
			<h1> Cadastro de Motorista </h1>

			<form method="post" action="{{ route('motoristas.store') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" id="nome" placeholder="Digite nome do motorista" name="nome">
				</div>
				<div class="form-group">
					<label for="cnh">CNH:</label>
					<input type="text" class="form-control" id="cnh" placeholder="Digite a cnh" name="cnh">
				</div>
				<div class="form-group">
					<label for="idade">Idade:</label>
					<input type="text" class="form-control" id="idade" placeholder="Informe a idade" name="idade">
				</div>
				<div class="form-group">
					<label for="habilitacao">Habilitacão:</label>
					<input type="text" class="form-control" id="habilitacao" placeholder="Informe o tipo de habilitação" name="habilitacao">
				</div>
				<button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
		</div>
	</div>
@endsection