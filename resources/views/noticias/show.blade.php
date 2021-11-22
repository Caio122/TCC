@extends('layouts.app')

@section('title', $noticia->titulo)

@section('content')

    <!-- Informações da Notícia -->

    <h3 class="text-white">Notícia Feita Por: {{ $noticiaOwner['name'] }}</h3>
    <!-- Começo do texto -->
    <div class="container text-justify" style="font-size: 22px">
        <div class="col">
            <!-- Título do Texto -->
            <div class="content text-center my-5">
                <h1 class="title text-info">{{ $noticia->titulo }}</h1>
                <!-- Subtítulo -->
                <p class="text-white">
                    {{ $noticia->sbtitulo }}
                </p>
                <!-- Imagem do Texto -->
                <div class="text-center">
                    <img style="width: 480px; height: 360px" src="/img/noticias/{{ $noticia->image }}"
                        class="img-fluid">
                </div>
            </div>
            <!-- Texto em si -->
            <div class="content">
                <p style="width: 35em; word-wrap:break-word;" class="mx-auto text-white">
                    {{ $noticia->texto }}
                </p>

            </div>
        </div>
    </div>


@endsection
