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
            <th>Matricula</th>
            <th>E-Mail</th>
            <th>Lider de Fuga</th>
            <th>Autorização</th>
            <th>#</th>
            <th>#</th>
        </thead>
        <tbody>
            @forelse ($pessoas as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> nome}}</td>
                    <td>{{ $item -> cpf}}</td>
                    <td>{{ $item -> rg}}</td>
                    <td>{{ $item -> funcionarios -> matricula}}</td>
                    <td>{{ $item -> email}}</td>
                    <td>{{ $item -> funcionarios -> liderFuga}}</td>
                    <td>{{ $item -> visitantes -> autorizacao}}</td>
                    <td>
                        <a href="{{route('funcionarios.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('funcionarios.destroy',['id' => $item->id])}}">
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
                    <td colspan="10">Nenhum cliente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection