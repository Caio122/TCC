@extends('layouts.noticiasmain')

@section('title', 'Notícias')

@section('content')

    <!-- Cabeçalho com logo e login -->
    <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
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
            <img src="./img/donate.png" />
        </a>
        <ul class="navbar-nav mr-auto px-5">
            <li class="nav-item">
                <a class="nav-link text-info" href="{{ route('noticias.index') }}">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{ route('reviews') }}">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{ route('tutoriais.index') }}">Tutoriais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{ url('sobre') }}">Sobre</a>
            </li>
        </ul>
        <form class="form-inline my-auto mr-auto px-5">
            <input style="position: relative; top: 0px; right: -105px;" class="form-control form-control-sm bg-dark"
                type="search">
        </form>
    </nav>

    <!-- Parte Do CRUD De Notícias -->
    <h2 style="color: white;">Notícias</h2>
    <a style="color: white;" href ="{{ route('noticias.create') }}">Nova Notícia</a>
    <br><br>
    <table>
        @foreach ($noticia as $noticias)
            <tr>
                <th scope="row">{{ $noticias->id }}</th>
                <td> {{ $noticias->nome }}</td>
                <td> {{ $noticias->quantidade }}</td>
                <td>
                    <a href="{{ route('noticias.show', $noticias->id) }}">Detalhes</a>
                    <a href="{{ route('noticias.edit', $noticias->id) }}">Alterar</a>
                    <a href="{{ route('noticias.delete', $noticias->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>



    <!-- Parte De Notícias -->
    <h1 class="title text-info"> Últimas Notícias </h1>
    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

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
