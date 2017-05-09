@extends('layouts.principal')
@section('titulo', 'Atualização de Cliente')
@section('conteudo')

    <h1> Atualização de Cliente </h1>

    <form method="post" action="{{ route('clientes.update', ['id' => $id]) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <label for="razao">Razão Social: </label>
        <input type="text" name="razao" id="razao" value="{{$razao}}">
        <br>
        <label for="nome_fantasia">Nome Fantasia: </label>
        <input type="text" name="nome_fantasia" id="nome_fantasia" value="{{$nome_fantasia}}">
        <br>
        <label for="cnpj">CNPJ: </label>
        <input type="text" name="cnpj" id="cnpj" value="{{$cnpj}}">
        <br>
        <label for="email">E-Mail: </label>
        <input type="text" name="email" id="email" value="{{$email}}">
        <br>
        <label for="ativo">Ativo: </label>
			<select name="ativo" id="ativo" value="{{$ativo}}">
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
        <br>
        <label for="obs">Observação: </label><br>
        <textarea cols="50" rows="5" name="obs" id="obs">{{$obs}}</textarea>
        <br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
@endsection