@extends('layouts.principal')
@section('titulo', 'Pagina de Veiculos')
@section('estilos')
    <link href="css/app.css" rel="stylesheet">
@endsection
@section('conteudo')
    <h1> Pagina de Veiculos </h1>

    <a href="{{route('veiculos.create')}}">
        <span class="glyphicon glyphicon-plus">Add</span>
    </a>

    <table class="table table-hover">
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
                    <td>
                        <a href="{{route('veiculos.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('veiculos.destroy',['id' => $item->id])}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Nenhum cliente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection