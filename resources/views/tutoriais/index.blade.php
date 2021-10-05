@extends('layouts.app')

@section('title', 'Tutorias')

@section('content')

   

    <!-- Barra com as categorias, pesquisa e donate -->
    <nav class="navbar navbar-expand-lg bg-dark border-top border-bottom border-info">
        <a class="navbar-brand ml-auto" href="">
            <img src="./img/donate.png"/>
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

    <h1 class="title text-info"> Página de Tutoriais </h1>

    <!-- Parte Do CRUD De Tutoriais -->
    <h2 style="color: white;">Tutoriais</h2>
    <a style="color: white;" href ="{{ route('tutoriais.create') }}">Novo Tutorial</a>
    <br><br>
    <table>
      @foreach ($tutorial as $tutoriais)
         <tr>
                <th scope="row">{{ $tutoriais->id }}</th>
                <td> {{ $tutoriais->nome }}</td>
                <td> {{ $tutoriais->quantidade }}</td>
                <td>
                    <a href="{{ route('tutoriais.show', $tutoriais->id) }}">Detalhes</a>
                    <a href="{{ route('tutoriais.edit', $tutoriais->id) }}">Alterar</a>
                    <a href="{{ route('tutoriais.delete', $tutoriais->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>  

    <!-- Início Da Parte Da Página De Tutoriais -->

    {{-- <!-- Começo do texto -->
    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            {{-- <!-- Título do Texto -->
            <div class="content text-left my-5">
                <h2 class="title text-info">Área de Tutoriais</h2>
                <div class="container text-justify" style="font-size: 22px">
<div class="row"> --}}
    
    <!-- Começo dos tutoriais -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Primeira coluna de tutoriais -->
            <div class="col-sm-5 mx-auto">
                <!-- Tutoriais em si -->
                <div class="card-post mb-5">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/register.jpeg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Registrar-se na Digital Monkey
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/register.jpeg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Registrar-se na Digital Monkey
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Segundo coluna de tutoriais -->
            <div class="col-sm-5 mx-auto">
                <!-- Tutoriais em si-->
                <div class="card-post mb-5">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Peneirar a brita
                            </h4>
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
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>
                            <h4 class="card-title text-white">
                                Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>
                            <h4 class="card-title text-white">
                                Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>
                            <h4 class="card-title text-white">
                                Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
