<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1"/>
    <meta name="keywords" content="Faculdade UCL">
    <meta name="author" content="Mariane Monteiro Quirino">

    <title> App Transportadora - @yield('titulo', 'Home Page') </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    @yield('estilos')

</head>
<body>
<div class="conteudo">
    <nav>
        <a href="{{route('clientes.index')}}">Clientes</a>
        <a href="{{route('mercadorias.index')}}">Mercadorias</a>
        <a href="{{route('veiculos.index')}}">Veiculos</a>
    </nav>
    @yield('conteudo')
</div>
</body>
</html>