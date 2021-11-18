@extends('layouts.app')

@section('title', $review->titulo)

@section('content')

<!-- Informações da Notícia -->

<h3 class="text-white">Review Feita Por: {{$reviewOwner ['name']}}</h3>
 <!-- Começo do texto -->
 <div class="container text-justify" style="font-size: 22px">
    <div class="col">
        <!-- Título do Texto -->
        <div class="content text-center my-5">
            <h1 class="title text-info">{{ $review->titulo }}</h1>
            <!-- Subtítulo -->
            <p class="text-white">
                {{ $review->sbtitulo }}
            </p>
            <!-- Imagem do Texto -->
            <div class="text-center">
                <img style="height:360px; width:480px; " src="/img/reviews/{{ $review->image }}" class="img-fluid">
            </div>
        </div>
        <!-- Texto em si -->
        <div class="content text-center my-5">
            <p class="text-white">
                {{ $review->texto }} 
            </p>

        </div>
    </div>
</div>


@endsection