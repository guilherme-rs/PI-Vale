@extends('layouts.principal')
@section('titulo', 'Detalhes da Mercadoria')
@section('conteudo')
    <h1> Veiculos do Motorista {{ $motorista->nome }}</h1>
    <div class="col-xs-6">
        <table class="table table-hover">
            <thead>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
            </thead>
            <tbody>
                @forelse($motorista->veiculos as $item)
                    <td>{{ $item -> marca }}</td>
                    <td>{{ $item -> modelo }}</td>
                    <td>{{ $item -> placa }}</td>
                @empty
                    <td> Nenhum veiculo cadastrado. </td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
