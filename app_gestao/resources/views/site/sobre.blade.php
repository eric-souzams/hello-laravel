@extends('site.layout.basico')

@section('titulo', 'Sobre')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o App Gestão</h1>
        </div>

        <div class="informacao-pagina">
            <p>O App Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
        </div>  
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(00) 00000-0000</span>
            <br>
            <span>examplo@exemplo.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>    
@endsection