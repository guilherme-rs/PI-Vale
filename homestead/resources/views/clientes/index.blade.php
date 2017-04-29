@extends('layouts.principal')
@section('titulo', 'Pagina de Clientes')
@section('conteudo')
    <h1> Pagina de Clientes </h1>

    <table>
        <thead>
        <th>ID</th>
        <th>Razão</th>
        <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>E-Mail</th>
        <th>Ativo</th>
        <th>Obs</th>
        </thead>
        <tbody>
            @forelse ($clientes as $item)
                <tr>
                    <td>{{ $loop -> index }}</td>
                    <td>{{ $item -> razao}}</td>
                    <td>{{ $item -> nome_fantasia}}</td>
                    <td>{{ $item -> cnpj}}</td>
                    <td>{{ $item -> email}}</td>
                    <td>{{ $item -> ativo}}</td>
                    <td>{{ $item -> obs}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Nenhum cliente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <form method="post" action="{{ route('clientes.salvar') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="submit" value="Enviar">
    </form>

    <a href="{{ route('clientes.detalhes', ['id' => '1']) }}"> Detalhes do Cliente </a>

@endsection