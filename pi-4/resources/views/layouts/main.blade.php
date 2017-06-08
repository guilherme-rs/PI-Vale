<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1"/>
        <meta name="keywords" content="Faculdade UCL">
        <meta name="author" content="Guilherme Rodrigues Sousa">

        <title>Safe Path - @yield('titulo', 'Home Page') </title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        @yield('estilos')
    </head>
    <body>
        <div class="conteudo">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand">Safe Path</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('incidentes.index') }}">Incidentes</a></li>
                        <li><a href="{{ route('funcionarios.index') }}">Funcionarios</a></li>
                        <li><a href="{{ route('predios.index') }}">Predios</a></li>
                        <li><a href="{{ route('rotafugas.index') }}">Rotas de Fuga</a></li>
                        <li><a href="{{ route('salas.index') }}">Salas</a></li>
                        <li><a href="{{ route('telefones.index') }}">Telefones</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </nav>
            @yield('conteudo')
        </div>
    </body>
</html>