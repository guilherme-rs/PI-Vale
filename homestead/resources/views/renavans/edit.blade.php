@extends('layouts.principal')
@section('titulo', 'Atualização de Renavan')
@section('conteudo')
	<div class="container">
		<div class="col-xs-8">
			<h1> Atualização do Renavan {{ $numero }}</h1>

			<form method="post" action="{{ route('renavans.update', ['id' => $id]) }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group">
						<label for="numero">Numero: </label>
						<input type="text" class="form-control" id="numero" value="{{ $numero }}" name="numero">
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