@extends('layouts.principal')
@section('titulo', 'Atualização de Cliente')
@section('conteudo')
	<div class="container">
		<h1> Atualização do Cliente {{ $nome_fantasia }}</h1>

		<form method="post" action="{{ route('clientes.update', ['id' => $id]) }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
					<label for="razao">Razão Social: </label>
					<input type="text" class="form-control" id="razao" value="{{ $razao }}" name="razao">
			</div>
			<div class="form-group">
					<label for="nome_fantasia">Nome Fantasia: </label>
					<input type="text" class="form-control" id="nome_fantasia" value="{{ $nome_fantasia }}" name="nome_fantasia">
			</div>
			<div class="form-group">
					<label for="cnpj">CNPJ: </label>
					<input type="text" class="form-control" id="cnpj" value="{{ $cnpj }}" name="cnpj">
			</div>
			<div class="form-group">
					<label for="email">E-Mail: </label>
					<input type="text" class="form-control" id="email" value="{{ $email }}" name="email">
			</div>
			<div class="form-group">
					<label for="ativo">Ativo: </label>
					<select name="ativo" id="ativo" class="form-control" value="{{$ativo}}">
					@if($ativo == 1){
						<option value="1" id="ativo" selected>Ativo</option>
						<option value="0" id="ativo">Inativo</option>
					}
					@else{
						<option value="1" id="ativo" >Ativo</option>
						<option value="0" id="ativo" selected>Inativo</option>
					}
					@endif
				</select>
			</div>
			<div class="form-group">
					<label for="obs">Observação: </label>
					<textarea rows="5" class="form-control" name="obs" id="obs">{{$obs}}</textarea>
			</div>
			<button type="submit" class="btn btn-default">Cadastrar</button>
		</form>
	</div>
@endsection