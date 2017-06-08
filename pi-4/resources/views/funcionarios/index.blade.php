@extends('layouts.main')
@section('titulo', 'Lista de Funcionarios')
@section('conteudo')
    <h1> Lista de Funcionarios </h1>

    <a href="{{route('funcionarios.create')}}">
        <span class="glyphicon glyphicon-plus">Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>E-Mail</th>
            <th>Matricula</th>
            <th>Lider de Fuga</th>
            <th>Status</th>
            <th>Predio</th>
            <th>Sala</th>
            <th>#</th>
            <th>#</th>
        </thead>
        <tbody>
            @forelse ($funcionarios as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> pessoa -> nome}}</td>
                    <td>{{ $item -> pessoa -> cpf}}</td>
                    <td>{{ $item -> pessoa -> rg}}</td>
                    <td>{{ $item -> pessoa -> email}}</td>
                    <td>{{ $item -> matricula}}</td>
                    <td>{{ $item -> liderFuga}}</td>
                    <td>{{ $item -> status}}</td>
                    <td>{{ $item -> sala -> predio -> nome}}</td>
                    <td>{{ $item -> sala -> nome}}</td>
                    <td>
                        <form method="post" action="{{ route('funcionarios.status',['id' => $item->id]) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PATCH">
                            <button type="submit">
                                <span class="glyphicon glyphicon-user"></span>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('funcionarios.edit', ['id' => $item->id]) }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('funcionarios.destroy',['id' => $item->id]) }}">
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
                    <td colspan="11">Nenhum funcionario cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection