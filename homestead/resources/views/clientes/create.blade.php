@extends('layouts.principal')
@section('titulo', 'Cadastro de Clientes')
@section('conteudo')
	<div class="container">
		<h1> Cadastro de Clientes </h1>

		<form method="post" action="{{ route('clientes.store') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
                <label for="razao">Razão Social: </label>
                <input type="text" class="form-control" id="razao" name="razao">
            </div>
			<div class="form-group">
                <label for="nome_fantasia">Nome Fantasia: </label>
                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia">
            </div>
			<div class="form-group">
                <label for="cnpj">CNPJ: </label>
                <input type="text" class="form-control" id="cnpj" name="cnpj">
            </div>
			<div class="form-group">
                <label for="email">E-Mail: </label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
			<div class="form-group">
                <label for="ativo">Ativo: </label>
                <select name="ativo" id="ativo" class="form-control">
					<option value="1" id="ativo">Ativo</option>
					<option value="0" id="ativo">Inativo</option>
				</select>
            </div>
			<div class="form-group">
                <label for="obs">Observação: </label>
                <textarea cols="50" rows="5" class="form-control" id="obs" name="obs"></textarea>
            </div>
			<button type="submit" class="btn btn-default">Cadastrar</button>
		</form>
	</div>
@endsection