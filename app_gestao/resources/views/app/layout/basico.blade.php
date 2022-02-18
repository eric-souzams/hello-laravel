<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>App Gestão - @yield('titulo')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/estiloBasico.css') }}">
    </head>

    <body>
        {{-- @yield('navbar', View::make('app.layout.components.topo')) --}}
        @include('app.layout.components.topo')
        @yield('conteudo')
    </body>
</html>