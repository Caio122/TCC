@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<!-- Informações da Notícia -->

<h3 class="title-text white">Informações da Notícia</h3>

<p>ID: {{ $noticia->id }}</p>
<p>Título: {{ $noticia->titulo }} </p>
<p>Subtítulo: {{ $noticia->sbtitulo }} </p>
<p>Texto: {{ $noticia->texto }} </p>

<a href=" {{ route('noticias.index') }}">Voltar</a>

@endsection