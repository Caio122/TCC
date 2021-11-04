@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Edição De Notícias Já Criada -->
    <h3 class="text-white">Editar Notícia</h3>

    <form action="{{ route('admin.noticias.update', $noticia->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" value="{{ $noticia->titulo }}">
        <input type="text" name="sbtitulo" value="{{ $noticia->sbtitulo }}">
        <input type="text" name="texto" value="{{ $noticia->texto }}">
        <input type="submit" value="Salvar">
    </form>

@endsection