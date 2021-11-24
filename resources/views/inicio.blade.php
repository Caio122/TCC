@extends('layouts.app')

@section('title', 'Digital Monkey')

@section('content')

    <!-- Começo das notícias -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Primeira coluna de notícias -->
            <div class="col-sm-5 mx-auto mw-50">
                <!-- Notícias em si -->
                @foreach ($noticia as $noticias)
                    <a class="image" href="{{ route('noticias.show', $noticias->id) }}">
                        <img class="card-img-top" src="/img/noticias/{{ $noticias->image }}">
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link" href="{{ route('noticias.show', $noticias->id) }}">
                            <h6 class="card-subtitle mt-2 text-info">{{ $noticias->titulo }}</h6>
                            <h4 class="card-title text-white">{{ $noticias->sbtitulo }}
                            </h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Tutoriais em si-->
            <div class="col-sm-5 mx-auto mw-50">
                @foreach ($tutorial as $tutoriais)
                    <a class="image" href="{{ route('tutoriais.show', $tutoriais->id) }}">
                        <img class="card-img-top" src="/img/tutoriais/{{ $tutoriais->image }}">
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link" href="{{ route('tutoriais.show', $tutoriais->id) }}">
                            <h6 class="card-subtitle mt-2 text-info">{{ $tutoriais->sbtitulo }}</h6>
                            <h4 class="card-title text-white">{{ $tutoriais->titulo }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Começo de Mais Lidas -->
        <div class="row bg-dark">
            <h2 class="text-info my-2 ml-4">
                Mais Lidas:
            </h2>
        </div>
        <div class="row bg-dark">
            @foreach ($review as $reviews)
                <div class="col-sm-4">
                    <div class="card-post">
                        <a class="image" href="{{ route('reviews.show', $reviews->id) }}">
                            <img class="card-img-top" src="/img/reviews/{{ $reviews->image }}">
                        </a>
                        <div class="card-body bg-dark">
                            <a class="card-link" href="{{ route('reviews.show', $reviews->id) }}">
                                <h6 class="card-subtitle mt-2 text-info">{{ $reviews->sbtitulo }}</h6>
                                <h4 class="card-title text-white">{{ $reviews->titulo }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>







    @endsection
