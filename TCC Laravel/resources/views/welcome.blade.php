@extends('layouts.welcomemain')

@section('title', 'Digital Monkey')

@section('content')

  <!-- Cabeçalho com logo e login -->
  <nav class="navbar navbar-expand-lg navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="./img/logo.png"/>
            </a>
            @auth
                <div class="navbar-brand ml-auto">
                <form action ="/logout" method="POST">
            @csrf
             <a href="/logout"
                class="btn btn-info" 
                onclick="event.preventDefault();
                this.closest('form').submit();">
                 Sair
                </a>
            </form>
            </a>
            </div>
        @endauth
        @guest
            <div class="navbar-brand ml-auto">
            <a href ="/register">
                <button type="button" class="btn btn-info">Registre-se</button>
            </a>
            <a href ="/login">
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
            <input style="position: relative; top: 0px; right: -105px;" class="form-control form-control-sm bg-dark" type="search">
        </form>
    </nav>

    <!-- Começo das notícias -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Primeira coluna de notícias -->
            <div class="col-sm-5 mx-auto">
                <!-- Notícias em si -->
                <div class="card-post mb-5">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img1.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">MOMENTO CHEGOU A SER GRAVADO</h6>

                            <h4 class="card-title text-white">WandaVision| Cena deletada traria um demônio, revela
                                diretor
                            </h4>
                        </a>
                    </div>

                </div>
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>

                </div>
            </div>
            <!-- Segundo coluna de notícias -->
            <div class="col-sm-5 mx-auto">
                <!-- Notícias em si-->
                <div class="card-post mb-5">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img1.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">MOMENTO CHEGOU A SER GRAVADO</h6>

                            <h4 class="card-title text-white">WandaVision| Cena deletada traria um demônio, revela
                                diretor
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Começo de Mais Lidas -->
        <div class="row bg-dark">
            <h2 class="text-info text-nowrap my-2 ml-4">
                Mais Lidas:
            </h2>

        </div>
        <div class="row bg-dark">
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                        <img class="card-img-top" src="img/img2.png" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO">
                            <h6 class="card-subtitle mt-2 text-info">QUADRINISTA LENDÁRIO</h6>
                            <h4 class="card-title text-white">Frank Thorne, artista de Red Sonja, morre aos 90 anos</h4>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <section class="footer">
        <div class="container mt-2">
            <ul>
                <li class="grid-8">
                    <p class="text-info">
                        <img src="./img/logo-ape.png" width="30" height="35" alig="left">
                        2021-2021 Digital Monkey |
                        Todas as imagens de filmes, séries e etc são marcas registradas dos seus respectivos
                        proprietários.
                    </p>
            </ul>
        </div>
        </li>
    </section>




    
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

@endsection
