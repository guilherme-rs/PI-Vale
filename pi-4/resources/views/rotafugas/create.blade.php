@extends('layouts.main')
@section('titulo', 'Cadastro de Rota de Fuga')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Rota de Fuga </h1>

            <form method="post" action="{{ route('rotafugas.store') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="desc">Descrição: </label>
                    <input type="text" class="form-control" id="desc" name="desc">
                </div>
                <div class="form-group">
                    <label for="rota">Imagem Rota: </label>
                    <input type="file" class="form-control" id="rota" name="rota">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection