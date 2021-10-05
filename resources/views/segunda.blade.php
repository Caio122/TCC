@extends('layouts.app')

@section('title', 'Penera a Brita')

@section('content')

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

    <!-- Começo do texto -->
    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            <!-- Título do Texto -->
            <div class="content text-left my-5">
                <h2 class="title text-info">Título Do Tutorial</h2>
                <br>
                <br>

                <!-- 1° Passo -->
                <div class="container text-justify" style="font-size: 22px">
                    <div class="text-center">
                        <img src="img/brita.jpg" class="rounded" alt="..." width="600" height="400">
                        <h6 class="card-title text-white">
                            1º Passo
                        </h6>
                        <h4 class="card-title text-white">
                            Rebola moss
                        </h4>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!-- 2° Passo -->
                        <div class="text-center">
                            <img src="img/brita.jpg" class="rounded" alt="..." width="600" height="400">
                            <h6 class="card-title text-white">
                                2º Passo
                            </h6>
                            <h4 class="card-title text-white">
                                Peneira a bita, vamo
                            </h4>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!-- 3° Passo -->
                        <div class="text-center">
                            <img src="img/brita.jpg" class="rounded" alt="..." width="600" height="400">
                            <h6 class="card-title text-white">
                                3º Passo
                            </h6>
                            <h4 class="card-title text-white">
                                Vamo meu fi
                            </h4>
                        </div>
                    </div>
                </div>
            </div>



            <script src="./node_modules/jquery/dist/jquery.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.js"></script>
            <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

        @endsection
