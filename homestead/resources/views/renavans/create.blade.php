@extends('layouts.principal')
@section('titulo', 'Cadastrar Renavan')
@section('conteudo')
	<div class="container">
		<div class="col-xs-8">
			<h1> Cadastrar Renavan </h1>

			<form method="post" action="{{ route('renavans.store')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
						<label for="numero">Numero: </label>
						<input type="text" class="form-control" id="numero" placeholder="Informe o numero do renavan" name="numero">
				</div>
				<div class="form-group">
					<label for="veiculo">Veiculo: </label>
					<select name="veiculo" id="veiculo" class="form-control">
						@forelse($veiculos as $item){							
							<option value="{{ $item -> id }}" id="veiculo">{{ $item -> modelo }}</option>
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