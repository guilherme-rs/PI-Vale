@extends('layouts.principal')
@section('titulo', 'Detalhes da Mercadoria')
@section('conteudo')
        <h1> Detalhes da Mercadoria </h1>

        <form method="post" action="{{ route('mercadorias.destroy', ['id' => $mercadoria->id]) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="excluir" value="EXCLUIR">
        </form>

        @include('layouts.barra-lateral')
@endsection
