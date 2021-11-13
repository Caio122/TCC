@extends('layouts.app')

@section('title', $review->titulo)

@section('content')

<!-- Informações da Notícia -->

{{-- <h3 class="title-text white">Informações da Review</h3> --}}

{{-- <p>ID: {{ $review->id }}</p>
<p>Título: {{ $review->titulo }} </p>
<p>Subtítulo: {{ $review->sbtitulo }} </p>
<p>Texto: {{ $review->texto }} </p>
 --}}

 <!-- Começo do texto -->
 <div class="container text-justify" style="font-size: 22px">
    <div class="row">
        <!-- Título do Texto -->
        <div class="content text-center my-5">
            <h1 class="title text-info">{{ $review->titulo }}</h1>
            <!-- Subtítulo -->
            <p class="text-white">
                {{ $review->sbtitulo }}
            </p>
            <!-- Imagem do Texto -->
            {{-- <div class="text-center">
                <img src="img/flash.jpg" class="img-fluid">
            </div> --}}
        </div>
        <!-- Texto em si -->
        <div class="content">
            <p class="text-white">
                {{ $review->texto }} 
            </p>

        </div>
    </div>
</div>


@endsection