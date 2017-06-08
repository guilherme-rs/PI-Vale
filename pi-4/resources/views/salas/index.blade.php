@extends('layouts.main')
@section('titulo', 'Lista de Salas')
@section('conteudo')
    <h1> Lista de Salas </h1>

    <a href="{{route('salas.create')}}">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar</button>
    </a>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Andar</th>
            <th>Predio</th>
            <th>Rota</th>
            <th>Editar</th>
            <th>Excluir</th>
            </thead>
        <tbody>
            @forelse ($salas as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> nome}}</td>
                    <td>{{ $item -> andar}}</td>
                    <td>{{ $item -> predio_id}}</td>
                    <td>{{ $item -> rotafuga_id}}</td>
                    <td>
                        <a href="{{route('salas.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('salas.destroy',['id' => $item->id])}}">
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
                    <td colspan="7">Nenhuma sala cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection