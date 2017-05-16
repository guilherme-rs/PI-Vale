@extends('layouts.principal')
@section('titulo', 'Cadastro de Mercadoria')
@section('conteudo')
	<div class="container">
		<div class="col-xs-8">
			<h1> Cadastro de Mercadoria </h1>

			<form method="post" action="{{ route('mercadorias.store') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="codbarras">Codigo de Barras:</label>
					<input type="text" class="form-control" id="codbarras" placeholder="Digite o codigo de barras" name="codbarras">
				</div>
				<div class="form-group">
					<label for="nf">Nota Fiscal:</label>
					<input type="text" class="form-control" id="nf" placeholder="Digite a nota fiscal" name="nf">
				</div>
				<div class="form-group">
					<label for="destino">Destino:</label>
					<input type="text" class="form-control" id="destino" placeholder="informe o endereço de entrega" name="destino">
				</div>

				<div class="form-group">
					<label for="cliente">Cliente: </label>
					<select name="cliente" id="cliente" class="form-control">
						@forelse($clientes as $item){
							<option value="{{ $item -> id }}" >{{ $item -> razao }}</option>
						}
						@empty{
							<option disabled> Nenhum cliente cadastrado. </option>
						}
						@endforelse
					</select>
				</div>

				<div class="form-group">
					<label for="veiculo">Veiculo:</label>
					<select name="veiculo" id="veiculo" class="form-control">
						@forelse($veiculos as $item){
							<option value="{{ $item -> id }}" id="veiculo" >{{ $item -> modelo }}</option>
						}
						@empty{
							<option disabled id="veiculo" > Nenhum veiculo cadastrado. </option>
						}
						@endforelse
					</select>
				</div>
				<button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
		</div>
	</div>
@endsection