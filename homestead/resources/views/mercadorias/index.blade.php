@extends('layouts.principal')
@section('titulo', 'Lista de Mercadorias')
@section('estilos')
    <link href="css/app.css" rel="stylesheet">
@endsection
@section('conteudo')
    <h1>Lista de Mercadorias</h1>
    @include('layouts.botao-login', ['texto' => 'Algum texto'])
    <table>
        <thead>
        <th>ID</th>
        <th>Nome</th>
        </thead>
        <tbody>
        <!--
             $loop->index - indice
        -->
        @forelse ($mercadorias as $i => $item)
            <tr>
                <td>{{ $loop -> index }}</td>
                <td>{{ $item }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">Nenhuma mercadoria encontrada.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    @include('layouts.barra-lateral')
@endsection

@section('scriptsRodape')
    @parent
    <script src="https://algum.componente.de/grid.js"></script>
@endsection