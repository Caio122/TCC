@extends('layouts.app')

@section('title', 'Editado Notícia')

@section('content')

    <!-- Indicação Para Editar Notícia -->
    <div id="editar-noticia-container" class="col-md-3 offset-md-4 mx-auto>
        <h1 class="text-white">Edite Sua Notícia</h1>
        <form action="{{ route('noticias.update', $noticia->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Editando Título De Notícia Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Título Da Notícia</label>
                <textarea type="text" class="class form-control" id="titulo"  name="titulo"
                    placeholder="Título da Notícia" value="{{ $noticia->titulo }}" required autocomplete="titulo"
                     wrap="soft">{{ $noticia->titulo }}</textarea>
            </div>

            <!-- Editando Subtítulo De Notícia Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Subtítulo Da Notícia</label>
                <textarea type="text" class="class form-control" id="sbtitulo"  name="sbtitulo"
                    placeholder="Subtítulo da Notícia" value="{{ $noticia->sbtitulo }}" required autocomplete="sbtitulo"
                     wrap="soft">{{ $noticia->sbtitulo }}</textarea>
            </div>

            <!-- Editando Conteúdo De Notícia Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo Da Notícia</label>
                <textarea type="text" name="texto" id="texto" class="form-control" placeholder="Conteúdo da Notícia"
                    value="{{ $noticia->texto }}"
                    required autocomplete="texto"  wrap="soft" cols="30" row="12">{{ $noticia->texto }}</textarea>
            </div>

            <!-- Editando Fonte da Notícia -->
            <div class="form-group">
                <label for="Title" class="title text-info">Fonte Da Notícia</label>
                <textarea id="fonte" type="text" class="class form-control" name="fonte" placeholder="Nome Da Fonte"
                    required autocomplete="titulo" wrap="soft"> {{ $noticia->fonte }}</textarea>
            </div>
            
            <!-- Botão Para Salvar Notícia -->
            <input class="btn btn-info" type="submit" value="Salvar">
        </form>
    </div>


@endsection
