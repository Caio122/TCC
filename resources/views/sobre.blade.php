@extends('layouts.sobremain')

@section('title', 'Sobre')

@section('content')

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
                </div>
            @endguest
        </div>
    </nav>

    <!-- Barra com as categorias, pesquisa e donate -->
    <nav class="navbar navbar-expand-lg bg-dark border-top border-bottom border-info">
        <a class="navbar-brand ml-auto" href="">
            <img src="./img/donate.png" />
        </a>
        <ul class="navbar-nav mr-auto px-5">
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('noticias.index')}}">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('forum')}}">Fórum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('reviews')}}">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('tutoriais.index')}}">Tutoriais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{url('register')}}">Sobre</a>
            </li>
        </ul>
        <form class="form-inline my-auto mr-auto px-5">
            <input style="position: relative; top: 0px; right: -105px;" class="form-control form-control-sm bg-dark"
                type="search">
        </form>
    </nav>

    <!--Começo da parte Quem Somos-->
    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            <div class="content text-left my-4">
                <h1 class="title text-info"> Quem Somos? </h1>
                <div class="content">
                    <p class="text-white">
                        A digital monkey é uma empresa independente criada por 6 adolescentes Fabio Henrique, Caio Fernando,
                        Gabriel Polido, Gabriel Silva, Dalan Batista e Danilo Nascimento.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            <div class="content text-left my-4">
                <h1 class="title text-info"> Por Que a Digital Monkey Foi Criada?</h1>
                <div class="content">
                    <p class="text-white">
                        A digital monkey foi criada para ajudar as pessoas a encontrar informações facilmente, muitos
                        lugares postam notícias geeks, porem eles são especializados em um nicho especifico, já a digital
                        monkey junta todos os polos em um lugar só criando uma central de informações.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            <div class="content text-left my-4">
                <h1 class="title text-info"> Nossa Missão </h1>
                <div class="content">
                    <p class="text-white">
                        A missão da digital monkey é tornar-se um polo de informações geek e gamer e facilitar o acesso de
                        leigos a informações relevantes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Rodapé-->
    <section class="footer border-top border-info">
        <div class="container ml-1 mt-2">
            <ul>
                <li class="grid-8">
                    <p class="text-info">
                        <img src="./img/logo-ape.png" width="30" height="35" alig="left">
                        2021-2021 Digital Monkey |
                        Todas as imagens de filmes, séries e etc são marcas registradas dos seus respectivos
                        proprietários
                    </p>
            </ul>
        </div>
        </li>
    </section>


@endsection
