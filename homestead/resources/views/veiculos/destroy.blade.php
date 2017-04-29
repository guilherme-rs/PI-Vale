@extends('layouts.principal')
@section('titulo', 'Exclusão de Veiculo')
@section('conteudo')
    <h1> Exclusão de Veiculo </h1>

    <form method="post" action="{{ route('veiculos.destroy', ['id' => $veiculo->id]) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="excluir" value="EXCLUIR">
    </form>
@endsection