@extends('layouts.principal')
@section('titulo', 'Pagina de Clientes')
@section('conteudo')
    <h1> Pagina de Clientes </h1>

    <a href="{{route('clientes.create')}}">
        <span class="glyphicon glyphicon-plus">Add</span>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Razão</th>
        <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>E-Mail</th>
        <th>Ativo</th>
        <th>Obs</th>
        </thead>
        <tbody>
            @forelse ($clientes as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> razao}}</td>
                    <td>{{ $item -> nome_fantasia}}</td>
                    <td>{{ $item -> cnpj}}</td>
                    <td>{{ $item -> email}}</td>
                    <td>{{ $item -> ativo}}</td>
                    <td>{{ $item -> obs}}</td>
					<td class="opcoes">
						<a href="{{route('clientes.edit', ['id' => $item->id])}}">
						  <span class="glyphicon glyphicon-pencil"></span>
						</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('clientes.destroy',['id' => $item->id])}}">
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
                    <td colspan="7">Nenhum cliente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection