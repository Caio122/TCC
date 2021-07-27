@extends('layouts.forummain')

@section('title', 'Fórum')

@section('content')

<!-- Cabeçalho com logo e login -->
<nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="./img/logo.png" />
            </a>
            <div class="navbar-brand ml-auto">
                <button type="button" class="btn btn-info">Registre-se</button>
                <button type="button" class="btn btn-light">Login</button>
            </div>
        </div>
    </nav>
    <!-- Barra com as categorias, pesquisa e donate -->

    <nav class="navbar navbar-expand-lg bg-dark border-top border-bottom border-info">
        <a class="navbar-brand ml-auto" href="">
            <img src="./img/donate.png" />
        </a>
        <ul class="navbar-nav mr-auto px-5">
            <li class="nav-item">
                <a class="nav-link text-info" href="/noticias">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/forum">Fórum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/reviews">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/tutoriais">Tutoriais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="/sobre">Sobre</a>
            </li>
        </ul>
        <form class="form-inline my-auto mr-auto px-5">
            <input class="form-control form-control-sm bg-dark" type="search">
        </form>
    </nav>

    <h1 class="title text-info"> Página do Fórum </h1>





<!-- Rodapé
    <section class="footer">
        <div class="container mt-2">
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
    </section> -->


@endsection
