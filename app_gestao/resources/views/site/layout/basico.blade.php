<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>App Gestão - @yield('titulo')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/estiloBasico.css') }}">
    </head>

    <body>
        {{-- @yield('navbar', View::make('site.layout.components.topo')) --}}
        @include('site.layout.components.topo')

        @yield('conteudo')
    </body>
</html>