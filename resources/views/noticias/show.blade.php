@extends('layouts.app')

@section('title', $noticia->titulo)

@section('content')

<!-- Informações da Notícia -->
{{-- <h3 class="title text-white">Informações da Notícia</h3>

<p class="title text-white">ID: {{ $noticia->id }}</p>
<p class="title text-white">Título: {{ $noticia->titulo }} </p>
<p class="title text-white">Subtítulo: {{ $noticia->sbtitulo }} </p>
<p class="title text-white">Texto: {{ $noticia->texto }} </p> --}}



 <!-- Começo do texto -->
 <div class="container text-justify" style="font-size: 22px">
    <div class="row">
        <!-- Título do Texto -->
        <div class="content text-center my-5">
            <h1 class="title text-info">{{ $noticia->titulo }}</h1>
            <!-- Subtítulo -->
            <p class="text-white">
                {{ $noticia->sbtitulo }}
            </p>
            <!-- Imagem do Texto -->
            {{-- <div class="text-center">
                <img src="img/flash.jpg" class="img-fluid">
            </div> --}}
        </div>
        <!-- Texto em si -->
        <div class="content">
            <p class="text-white">
                {{ $noticia->texto }} 
            </p>

        </div>
    </div>
</div>


@endsection