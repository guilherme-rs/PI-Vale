@extends('layouts.principal')
@section('titulo', 'Atualização de Mercadoria')
@section('conteudo')
	<div class="container">
		<div class="col-xs-8">

			<h1> Atualização de Mercadoria </h1>

			<form method="post" action="{{ route('mercadorias.update', ['id' => $id]) }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group">
					<label for="codbarras">Codigo de Barras: </label>
					<input type="text" class="form-control" id="codbarras" value="{{ $codigobarras }}" name="codbarras">
				</div>
				<div class="form-group">
					<label for="nf">Nota Fiscal: </label>
					<input type="text" class="form-control" id="nf" value="{{ $notafiscal }}" name="nf">
				</div>
				<div class="form-group">
					<label for="destino">Destino: </label>
					<input type="text" class="form-control" id="destino" value="{{ $destino }}" name="destino">
				</div>

				<div class="form-group">
					<label for="cliente">Cliente: </label>
					<select name="cliente" id="cliente" class="form-control">						
						@forelse($clientes as $item){
							@if($item -> id == $cliente_id)
								<option value="{{ $item -> id }}" id="cliente" selected>{{ $item -> razao }}</option>
							@else
								<option value="{{ $item -> id }}" id="cliente">{{ $item -> razao }}</option>
							@endif
						}
						@empty{
							<option disabled id="cliente" > Nenhum cliente cadastrado. </option>
						}
						@endforelse
					</select>
				</div>

				<div class="form-group">
					<label for="veiculo">Veiculo: </label>
					<select name="veiculo" id="veiculo" class="form-control">
						@forelse($veiculos as $item){
							@if($item -> id == $veiculo_id)
								<option value="{{ $item -> id }}" id="veiculo" selected>{{ $item -> modelo }}</option>
							@else
								<option value="{{ $item -> id }}" id="veiculo">{{ $item -> modelo }}</option>
							@endif
						}
						@empty{
							<option disabled id="cliente" > Nenhum veiculo cadastrado. </option>
						}
						@endforelse
					</select>
				</div>
				<button type="submit" class="btn btn-default">Cadastrar</button>
			</form>
		</div>
	</div>
@endsection