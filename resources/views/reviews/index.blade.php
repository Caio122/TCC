@extends('layouts.app')

@section('title', 'Reviews')

@section('content')

    <!-- Parte De Reviews -->
    <div class="container">
        <h1 class="title text-info"> Últimas Reviews </h1>

        <!-- Adição da Nova Review Para o Usuário -->
        @foreach ($review as $reviews)
            <div class="row my-3">
                <article class="card-post">
                    <a href="{{ route('reviews.show', $reviews->id) }}">
                        <div style="float: left">
                            <img class="rounded" style="width: 300px; height: 200px" src="/img/reviews/{{ $reviews->image }}">
                        </div>
                        <h3 style="display: table-cell; float: left; width: 300px; margin-left: 15px;"
                            class="card-title text-white">
                            {{ $reviews->titulo }}
                        </h3>
                    </a>
                </article>
            </div>
        @endforeach


    @endsection
