@extends('layouts.app')

@section('title', $review->titulo)

@section('content')


    <!-- Começo do texto -->
    <p class="text-white"> Coescrita Por: <b class="text-info">{{ $reviewOwner['name'] }}</b></p>
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
                    <img class="img-fluid" src="/img/reviews/{{ $review->image }}">
                </div>
                <!-- Texto em si -->
                <div class="content my-3">
                    <p style="width: 35em; word-wrap:break-word;" class="text-white mx-auto">
                        {{ $review->texto }}
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
