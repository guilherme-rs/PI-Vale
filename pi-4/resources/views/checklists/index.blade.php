@extends('layouts.main')
@section('titulo', 'Lista de Checklists')
@section('conteudo')
    <h1> Lista de Checklists </h1>

    <a href="{{route('checklists.create')}}">
        <span class="glyphicon glyphicon-plus">Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Data</th>
        <th>Estado</th>
        <th>#</th>
        <th>#</th>
        </thead>
        <tbody>
        @forelse ($checklists as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> data}}</td>
                <td>{{ $item -> estado}}</td>
                <td>
                    <a href="{{route('checklists.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('checklists.destroy',['id' => $item->id])}}">
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