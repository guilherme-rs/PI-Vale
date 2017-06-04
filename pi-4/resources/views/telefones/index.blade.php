@extends('layouts.main')
@section('titulo', 'Lista de Telefones')
@section('conteudo')
    <h1> Lista de Telefones </h1>

    <a href="{{route('telefones.create')}}">
        <span class="glyphicon glyphicon-plus">Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Numero</th>
            <th>Carrier</th>
            <th>Descrição</th>
            <th>#</th>
            <th>#</th>
            </thead>
        <tbody>
            @forelse ($telefones as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> numero }}</td>
                    <td>{{ $item -> carrier}}</td>
                    <td>{{ $item -> descricao}}</td>
                    <td>
                        <a href="{{route('telefones.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('telefones.destroy',['id' => $item->id])}}">
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
                    <td colspan="6">Nenhum telefone cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection