@extends('layouts.principal')
@section('titulo', 'Atualização de Mercadoria')
@section('conteudo')
	<div class="container">

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
                <input type="text" class="form-control" id="cliente" value="{{ $cliente_id }}" name="cliente_id">
            </div>
			<div class="form-group">
                <label for="veiculo">Veiculo: </label>
                <input type="text" class="form-control" id="veiculo" value="{{ $veiculo_id }}" name="veiculo_id">
            </div>			
			<button type="submit" class="btn btn-default">Cadastrar</button>
		</form>
	</div>
@endsection