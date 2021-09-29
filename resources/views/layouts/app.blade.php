<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
<<<<<<< HEAD
        <!-- Cabeçalho com logo e login -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="./img/logo.png" />
            </a>
            @auth
                <div class="navbar-brand ml-auto">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="btn btn-info" onclick="event.preventDefault();
                        this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                    </a>
                </div>
            @endauth
            @guest
                <div class="navbar-brand ml-auto">
                    <a href="{{route('register')}}">
                        <button type="button" class="btn btn-info">Registre-se</button>
                    </a>
                    <a href="{{route('login')}}">
                        <button type="button" class="btn btn-light">Login</button>
                    </a>
=======
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="./img/logo.png"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-info" href="{{ route('register') }}">{{ __('Registre-se') }}</a>
                                </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
>>>>>>> f5899c9dc13109a8c852d2d68a190f5151f2dce4
                </div>
            @endguest
        </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
