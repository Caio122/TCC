@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<!-- Informações da Notícia -->

<h3 class="title-text white">Informações da Notícia</h3>

<p>ID: {{ $noticia->id }}</p>
<p>Nome: {{ $noticia->titulo }} </p>

<a href=" {{ route('noticias.index') }}">Voltar</a>

@endsection