<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Cadastro de Clientes {{ $nome_cliente }} </title>

    </head>
    <body>
        <h1> Detalhes do Cliente {{ $nome_cliente }} </h1>

        <a href="{{ route('clientes.detalhes', ['id' => '0']) }}"> Detalhes do Cliente </a>
    </body>
</html>