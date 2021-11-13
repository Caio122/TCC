@extends('layouts.app')

@section('title', 'Reviews')

@section('content')

    <!-- Parte De Reviews -->
    <div class="container">
        <h1 class="title text-info"> Últimas Reviews </h1>

        <!-- Adição da Nova Review Para o usuário -->
        @foreach ($review as $reviews)
            <div class="row">
                <article class="card-post">
                    <a href="{{ route('reviews.show', $reviews->id) }}">
                        <div style="float: left">
                            <img style="width: 300px; height: 200px" src="/img/reviews/{{ $reviews->image }}">
                        </div>
                        <h3 style="display: table-cell; float: left; width: 300px; margin-left: 15px;"
                            class="card-title text-white">
                            {{ $reviews->titulo }}
                        </h3>
                    </a>
                </article>
            </div>
            <tr>
                <th scope="row">{{ $reviews->id }}</th>
                <td> {{ $reviews->titulo }}</td>
                <td>
                    <a class="title text-info" href="{{ route('reviews.show', $reviews->id) }}">Detalhes</a>
                    <a class="title text-info" href="{{ route('reviews.edit', $reviews->id) }}">Alterar</a>
                    <a class="title text-info" href="{{ route('reviews.delete', $reviews->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach

        <!-- Parte De Reviews -->
        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/re4.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        Minha Review Sobre Resident Evil 4
                    </h3>
                </a>
            </article>
        </div>

        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/re4.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        Minha Review Sobre Resident Evil 4
                    </h3>
                </a>
            </article>
        </div>

        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/re4.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        Minha Review Sobre Resident Evil 4
                    </h3>
                </a>
            </article>
        </div>

        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/re4.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        Minha Review Sobre Resident Evil 4
                    </h3>
                </a>
            </article>
        </div>

    </div>

@endsection
