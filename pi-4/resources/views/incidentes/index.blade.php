@extends('layouts.main')
@section('titulo', 'Lista de Incidentes')
@section('conteudo')
    <h1> Lista de Incidentes </h1>

    <a href="{{route('incidentes.create')}}">
        <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Adicionar</button>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Descrição</th>
        <th>Alerta abandono</th>
        <th>Data do incidente</th>
        <th>CheckList</th>
        <th>Editar</th>
        <th>Excluir</th>
        </thead>
        <tbody>
        @forelse ($incidentes as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> descricao}}</td>
                <td>{{ $item -> alertaAbandono}}</td>
                <td>{{ $item -> data}}</td>
                <td>
                    <a href="{{route('incidentes.show', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
                <td>
                    <a href="{{route('incidentes.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('incidentes.destroy',['id' => $item->id])}}">
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
                <td colspan="6">Nenhum predio cadastrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection