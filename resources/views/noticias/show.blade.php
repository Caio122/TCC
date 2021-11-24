@extends('layouts.app')

@section('title', $noticia->titulo)

@section('content')

    <!-- Começo do texto -->
    <p class="text-white">Coescrita Por: <b class="text-info">{{ $noticiaOwner['name'] }}</b></p>
    <p class="text-white">Fonte Da Notícia: <b class="text-info">{{ $noticia->fonte }}</b></p>
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
            <!-- Texto em si -->
            <div class="content my-3">
                <p style="width: 35em; word-wrap:break-word;" class="text-white mx-auto ">
                    {{ $noticia->texto }}
                </p>
            </div>
        </div>
    </div>
</div>


@endsection
