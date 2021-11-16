<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

        <!-- Cabeçalho com logo e login -->
        <nav class="navbar navbar-expand-lg navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="logo">
                </a>


                <!-- Parte De Autenticação  -->
                @auth
                    <div class="nav-item dropdown">
                        <a style="color:white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                            @if (Auth::user()->admin)
                            <a class="dropdown-item" href="{{ route('home')}}">
                                {{ __('Administrativo') }}
                            </a>
                            @else
                            <a class="dropdown-item" href="{{ route('dashboard') }}">
                                {{ __('Meu Perfil') }}
                            </a>
                            @endif
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endauth
                @guest

                    <div class="navbar-brand ml-auto">
                        <a href="{{ route('register') }}">
                            <button type="button" class="btn btn-info">Registre-se</button>
                        </a>
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-light">Login</button>
                        </a>
                    </div>
                @endguest
            </div>
        </nav>

        <!-- Barra com as categorias, pesquisa e donate -->
        <nav class="navbar navbar-expand-lg bg-dark border-top border-bottom border-info">
            <a class="navbar-brand ml-auto" href="">
                <img src="/img/donate.png" />
            </a>
            <ul class="navbar-nav mr-auto px-5">
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('noticias.index') }}">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('reviews.index') }}">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('tutoriais.index') }}">Tutoriais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ url('sobre') }}">Sobre</a>
                </li>
            </ul>
            <form action="/" method="GET" class="form-inline my-auto mr-auto px-5">
                @csrf
                <input type="text" style="position: relative; top: 0px; right: -105px; color:white" id="search"
                    name="search" placeholder="Pesquisar" class="form-control form-control-sm bg-dark">
            </form>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <!--Rodapé-->
        <div class="border-top border-info">
            <div class="container  ml-1 mt-2">
                <p class="text-info">
                    <img src="/img/logo-ape.png" width="30" height="35" alig="left">
                    2021-2021 Digital Monkey |
                    Todas as imagens de filmes, séries e etc são marcas registradas dos seus respectivos
                    proprietários
                </p>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
