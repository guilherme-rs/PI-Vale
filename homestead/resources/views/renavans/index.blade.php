@extends('layouts.principal')
@section('titulo', 'Pagina de Renavan')
@section('conteudo')
    <h1> Pagina de Renavan </h1>

    <a href="{{route('renavans.create')}}">
        <span class="glyphicon glyphicon-plus">Add</span>
    </a>

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Renavan</th>
        <th>Veiculo</th>
        </thead>
        <tbody>
            @forelse ($renavans as $item)
                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> numero }}</td>
                    <td>{{ $item -> veiculo -> modelo }}</td>
                    <td>
                        <a href="{{route('renavans.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('renavans.destroy',['id' => $item->id])}}">
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
                    <td colspan="7">Nenhum renavan encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection