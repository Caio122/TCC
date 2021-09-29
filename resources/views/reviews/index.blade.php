@extends('layouts.app')

@section('title', 'Reviews')

@section('content')

    
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
                <a class="nav-link text-info" href="{{route('reviews')}}">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('tutoriais.index')}}">Tutoriais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{url('sobre')}}">Sobre</a>
            </li>
        </ul>
        <form class="form-inline my-auto mr-auto px-5">
            <input style="position: relative; top: 0px; right: -105px;" class="form-control form-control-sm bg-dark"
                type="search">
        </form>
    </nav>


    <!-- Parte Da Inserção de Novas Reviews -->

    <!-- Parte De Reviews -->
    <h1 class="title text-info"> Últimas Reviews </h1>
    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />


@endsection
