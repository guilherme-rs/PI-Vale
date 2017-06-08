@extends('layouts.main')
@section('titulo', 'Lista de Rotas de Fuga')
@section('conteudo')
    <h1> Lista de Rotas de Fuga </h1>

    <a href="{{route('rotafugas.create')}}">
        <span class="glyphicon glyphicon-plus">Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Descrição</th>
            <th>Rota</th>
            <th>Rotas de Fuga</th>
            <th>#</th>
            <th>#</th>
        </thead>
        <tbody>
            @forelse ($rotas as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> descricao}}</td>
                    <td>{{ $item -> mapa}}</td>
                    <td><img width="100" src="/imagens/{{ $item -> mapa }}"></td>
                    {{--<td style="text-align: center">
                        <a href="{{route('rotafugas.show', ['id'=> $item->id])}}">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>--}}
                    <td>
                        <a href="{{route('rotafugas.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('rotafugas.destroy',['id' => $item->id])}}">
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
                    <td colspan="6">Nenhuma rota encontrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection