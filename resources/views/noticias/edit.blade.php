@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Editando Título De Notícia Já Criada -->
    <div id="editar-noticia-container" class="col-md-3 offset-md-4">
        <h1 class="text-white">Editar Notícia</h1>
        <form action="{{ route('noticias.update', $noticia->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Title" class="title text-info">Título Da Notícia</label>
                <input type="text" class="class form-control" id="titulo" maxlength="60" name="titulo"
                    placeholder="Título da Notícia" value="{{ $noticia->titulo }}" required autocomplete="titulo">
            </div>

            <!-- Editando Subtítulo De Notícia Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Subtítulo Da Notícia</label>
                <input type="text" class="class form-control" id="sbtitulo" maxlength="60" name="sbtitulo"
                    placeholder="Subtítulo da Notícia" value="{{ $noticia->sbtitulo }}" required autocomplete="sbtitulo">
            </div>

            <!-- Editando Conteúdo De Notícia Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo Da Notícia</label>
                <input type="text" name="texto" id="texto" class="form-control" placeholder="Conteúdo da Notícia"
                 value="{{ $noticia->texto }}" required autocomplete="texto">
            </div>
            <input class="btn btn-info" type="submit" value="Salvar">
        </form>
    </div>
    

@endsection
