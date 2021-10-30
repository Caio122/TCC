@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<h1 class="my-2 ml-5" style="color: white;">
    Cê é o bichão memo em, doido.
</h1>

<!-- Adição de novas Notícias -->
<a href ="{{ route('noticias.create') }}">
    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Notícia</h4>
</a>

<!-- Adição de novas Reviews -->
<a href ="{{ route('reviews.create') }}">
    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Review</h4>
</a>

@endsection