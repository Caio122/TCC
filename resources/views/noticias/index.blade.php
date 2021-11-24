@extends('layouts.app')

@section('title', 'Notícias')

@section('content')


    <!-- Parte De Notícias -->
    <div class="container">
        <h1 class="title text-info"> Últimas Notícias </h1>

        <!-- Adição da Nova Notícia Para o usuário -->
        @foreach ($noticia as $noticias)
            <div class="row">
                <article class="card-post my-3 ">
                    <a href="{{ route('noticias.show', $noticias->id) }}">
                        <div style="float: left">
                            <img class="rounded" style="width: 300px; height: 200px; object-fit:cover" src="/img/noticias/{{ $noticias->image }}">

                        </div>
                        <h3 style="display: table-cell; float: left; width: 300px; margin-left: 15px;"
                            class="card-title text-white">
                            {{ $noticias->titulo }}
                        </h3>
                    </a>
                </article>
            </div>
        @endforeach


    @endsection
