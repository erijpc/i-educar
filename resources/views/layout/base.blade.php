<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>i-Educar @if(isset($title)) - {!! $title !!} @endif</title>
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ Asset::get('intranet/styles/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ Asset::get('css/base.css') }}">
    @stack('styles')
    @stack('scripts')
    @stack('head')
</head>
<body>
<div class="ieducar-container">
    <header class="ieducar-header">
        <div class="ieducar-header-logo">
            <h1><a href="{{ url('/') }}">i-Educar</a></h1>
        </div>
        <div class="ieducar-header-links">
            <div class="dropdown">
                <div class="dropbtn">{{ $loggedUser->name }}</div>
                <div class="dropdown-content">
                    <a href="{{ url('intranet/agenda.php') }}">Agenda</a>
                    <a href="{{ url('intranet/index.php') }}">Calendário</a>
                    <a href="{{ url('intranet/meusdados.php') }}">Meus dados</a>
                    <a href="{{ url('intranet/logof.php') }}">Sair</a>
                </div>
            </div>
            <a href="{{ url('intranet/meusdados.php') }}" class="avatar" title="Meus dados">
                <img height="35" src="{{ url('intranet/imagens/user-perfil.png') }}" alt="Perfil">
            </a>
            <a href="#" class="notifications">
                <img alt="Notificação" id="notificacao" src="{{ url('intranet/imagens/icon-nav-notifications.png') }}">
            </a>
        </div>
    </header>
    <div class="ieducar-content">
        <div class="ieducar-sidebar">
            @include('layout.menu')
        </div>
        <div class="ieducar-main">
            @include('layout.topmenu')
            <div class="ieducar-main-content">
                @include('layout.breadcrumb')
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="ieducar-footer">
        @include('layout.footer')
    </footer>
</div>
@include('layout.vue')
@stack('end')
</body>
</html>
