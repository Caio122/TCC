@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<h1 class="my-2 ml-5" style="color: white;">
    Cê é o bichão memo em, doido.
</h1>

    <!-- Tabela Das Notícias -->
    {{-- <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 class="title text-white">Minhas Notícias</h1>
    </div>
    <div class="col-md-10 offset-md-1 noticias-container">
            @if (count($noticia) > 0)
            @else
                <p class="title text-info">Você Ainda Não Tem Notícias <a href="{{ route('noticias.create') }}">
                        <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Notícia</h4>
                    </a>
                </p>
            @endif
    </div> --}}

    <!-- Tabela Das Reviews -->
    {{-- <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 class="title text-white">Minhas Reviews</h1>
    </div>
    <div class="col-md-10 offset-md-1 noticias-container">
            @if (count($review) > 0)
            @else
                <p class="title text-info">Você Ainda Não Tem Reviews <a href="{{ route('reviews.create') }}">
                        <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Review</h4>
                    </a>
                </p>
            @endif
    </div> --}}

    <!-- Adição de novas Notícias -->
<a href ="{{ route('noticias.create') }}">
    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Notícia</h4>
</a>

<!-- Adição de novas Reviews -->
<a href ="{{ route('reviews.create') }}">
    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Review</h4>
</a>

@endsection
