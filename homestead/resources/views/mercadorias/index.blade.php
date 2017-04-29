@extends('layouts.principal')

@section('titulo', 'Lista de Mercadorias')

@section('estilos')

    <link href="css/app.css" rel="stylesheet">
@endsection

@section('conteudo')

    <h1>Lista de Mercadorias</h1>

    <table>
        <thead>
        <th>ID</th>
        <th>Código de Barras</th>
        <th>Nota Fiscal</th>
        <th>Endereço de entrega</th>
        <th>Cliente</th>
        <th>Veiculo</th>
        </thead>
        <tbody>

        @forelse ($mercadorias as $i => $item)
            <tr>
                <td>{{ $loop -> index }}</td>
                <td>{{ $item -> codigobarras }}</td>
                <td>{{ $item -> notafiscal }}</td>
                <td>{{ $item -> destino }}</td>
                <td>{{ $item -> cliente_id }}</td>
                <td>{{ $item -> veiculo_id }}</td>
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