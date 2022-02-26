@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Falta pouco agora! Precisamos apenas que você valide o seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo e-mail de redefinição foi enviado para você.') }}
                        </div>
                    @endif

                    {{ __('Para poder prosseguir, antes você precisa validar o seu e-mail por meio do link de confirmação enviado.') }}
                    {{ __('Caso você não tenha recebido o email de verificação') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para reenviar') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
