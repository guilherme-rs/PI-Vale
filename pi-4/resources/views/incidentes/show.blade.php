@extends('layouts.main')
@section('titulo', 'Lista de Pessoas')
@section('conteudo')
    <h1> Lista de Pessoas </h1>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Descrição</th>
        <th>Nome</th>
        <th>Adicionar</th>
        </thead>
        <tbody>
        @forelse ($checklist as $item)
            <tr>
                <td>{{ $item -> id }}</td>
                <td>{{ $item -> estado }}</td>
                <td>{{ $item -> pessoa -> nome}}</td>
                <td>
                    <a href="{{route('checklists.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Nenhuma pessoa registrada.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection