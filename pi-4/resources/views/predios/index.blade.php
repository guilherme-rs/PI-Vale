@extends('layouts.main')
@section('titulo', 'Lista de Predios')
@section('conteudo')
    <h1> Lista de Predios </h1>

    <a href="{{route('predios.create')}}">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar</button>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Distancia</th>
        <th style="text-align: center">Lista de Salas</th>
        <th>Editar</th>
        <th>Excluir</th>
        </thead>
        <tbody>
        @forelse ($predios as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> nome}}</td>
                <td>{{ $item -> latitude}}</td>
                <td>{{ $item -> longitude}}</td>
                <td>{{ $item -> distancia}}</td>
                <td style="text-align: center">
                    <a href="{{route('predios.show', ['id'=> $item->id])}}">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
                <td>
                    <a href="{{route('predios.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('predios.destroy',['id' => $item->id])}}">
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
                <td colspan="8">Nenhum predio cadastrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection