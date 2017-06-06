@extends('layouts.main')
@section('titulo', 'Cadastro de Rota de Fuga')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Atualização de Rota de Fuga </h1>

            <form method="post" action="{{ route('rotafugas.update',['id' => $id]) }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $descricao }}">
                </div>
                <div class="form-group">
                    <label >Imagem Rota: </label>
                    <p><img width="500" src="/{{ $caminhomapa }}"name="rotaVelha"></p>
                </div>
                <div class="form-group">
                    <label for="rotaNova">Imagem Rota: </label>
                    <input type="file" class="form-control" id="rotaNova" name="rotaNova">
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection