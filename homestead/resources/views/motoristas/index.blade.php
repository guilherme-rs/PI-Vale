@extends('layouts.principal')
@section('titulo', 'Lista de Motoristas')
@section('conteudo')

    <h1>Lista de Motoristas</h1>

    <a href="{{route('motoristas.create')}}">
        <span class="glyphicon glyphicon-plus">Add</span>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>CNH</th>
        <th>Idade</th>
        <th>Habilitação</th>
        <th style="text-align: center">Veiculos</th>
        </thead>
        <tbody>

        @forelse ($motoristas as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> nome }}</td>
                <td>{{ $item -> cnh }}</td>
                <td>{{ $item -> idade }}</td>
                <td>{{ $item -> habilitacao }}</td>
                <td style="text-align: center">
                    <a href="{{route('motoristas.show', ['id'=> $item->id])}}">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                </td>
                <td class="opcoes">
                    <a href="{{route('motoristas.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('motoristas.destroy',['id' => $item->id])}}">
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
                <td colspan="2">Nenhum Motorista encontrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection

@section('scriptsRodape')
    @parent
@endsection