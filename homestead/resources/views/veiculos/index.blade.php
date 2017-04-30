@extends('layouts.principal')
@section('titulo', 'Pagina de Veiculos')
@section('conteudo')
    <h1> Pagina de Veiculos </h1>

    <table>
        <thead>
        <th>ID</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Combustivel</th>
        </thead>
        <tbody>
            @forelse ($veiculos as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> placa}}</td>
                    <td>{{ $item -> marca}}</td>
                    <td>{{ $item -> modelo}}</td>
                    <td>{{ $item -> cor}}</td>
                    <td>{{ $item -> combustivel}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Nenhum cliente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection