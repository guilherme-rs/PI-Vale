@extends('layouts.principal')
@section('titulo', 'Lista de Mercadorias')
@section('conteudo')

    <h1>Lista de Mercadorias</h1>

    <a href="{{route('mercadorias.create')}}">
        <span class="glyphicon glyphicon-plus">Add</span>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Código de Barras</th>
        <th>Nota Fiscal</th>
        <th>Endereço de entrega</th>
        <th>Cliente</th>
        <th>Veiculo</th>
        </thead>
        <tbody>

        @forelse ($mercadorias as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> codigobarras }}</td>
                <td>{{ $item -> notafiscal }}</td>
                <td>{{ $item -> destino }}</td>
                <td>{{ $item -> cliente -> razao }}</td>
                <td>{{ $item -> veiculo -> modelo}}</td>
                <td class="opcoes">
                    <a href="{{route('mercadorias.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('mercadorias.destroy',['id' => $item->id])}}">
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
                <td colspan="2">Nenhuma mercadoria encontrada.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection

@section('scriptsRodape')
    @parent
@endsection