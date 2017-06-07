@extends('layouts.main')
@section('titulo', 'Lista de Incidentes')
@section('conteudo')
    <h1> Lista de Incidentes </h1>

    <a href="{{route('incidentes.create')}}">
        <span class="glyphicon glyphicon-plus">Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Descrição</th>
        <th>Alerta abandono</th>
        <th>Data do incidente</th>
        <th>#</th>
        <th>#</th>
        </thead>
        <tbody>
        @forelse ($incidentes as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> descricao}}</td>
                <td>{{ $item -> alertaAbandono}}</td>
                <td>{{ $item -> data}}</td>
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
                <td colspan="5">Nenhum predio cadastrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection