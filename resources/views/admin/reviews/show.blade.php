@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<!-- Informações da Notícia -->

<h3 class="title-text white">Informações da Review</h3>

<p>ID: {{ $review->id }}</p>
<p>Título: {{ $review->titulo }} </p>
<p>Subtítulo: {{ $review->sbtitulo }} </p>
<p>Texto: {{ $review->texto }} </p>

<a href=" {{ route('reviews.index') }} ">Voltar</a>

@endsection