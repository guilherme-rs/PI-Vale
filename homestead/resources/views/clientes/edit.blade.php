@extends('layouts.principal')
@section('titulo', 'Cadastro de Clientes')

    <h1> Pagina de Clientes </h1>
    <form method="post" action="{{ route('clientes.salvar') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Digite seu nome">


        <input type="submit" value="Enviar">
    </form>

    <a href="{{ route('clientes.detalhes', ['id' => '1']) }}"> Detalhes do Cliente </a>

@include('layouts.barra-lateral')