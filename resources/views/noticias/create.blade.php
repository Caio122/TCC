@extends('layouts.app')

@section('title', 'Criando Notícia')

@section('content')

    <!-- Indicação De Nova Notícia -->
    <div id="criar-noticia-container" class="col-md-3 offset-md-4">
        <h1 class="title text-white">Crie Sua Notícia</h1>
        <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Adicionando Título da Notícia -->
            <div class="form-group">
                <label for="Title" class="title text-info">Título Da Notícia</label>
                <textarea id="titulo" type="text" class="class form-control" name="titulo" placeholder="Título da Notícia"
                    required autocomplete="titulo"  wrap="soft"></textarea>
            </div>

            <!-- Adicionando Subtítulo da Notícia -->
            <div class="form-group">
                <label for="Title" class="title text-info">Subtítulo Da Notícia</label>
                <textarea id="sbtitulo" type="text" class="class form-control" name="sbtitulo"
                    placeholder="Subtítulo da Notícia" required autocomplete="sbtitulo"  wrap="soft"></textarea>
            </div>

            <!-- Adicionando Imagem da Notícia -->
            <div class="form-group">
                <label for="image" class="title text-info">Imagem Para Notícia:</label>
                <input type="file" id="image" name="image" class="from-control-file" required autocomplete="image">
            </div>

            <!-- Adicionando Conteúdo da Notícia -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo Da Notícia</label>
                <textarea name="texto" id="texto" class="form-control" placeholder="Conteúdo da Notícia" required
                    autocomplete="texto" wrap="soft"></textarea>
            </div>

            <!-- Botão Para Salvar Notícia -->
            <input class="btn btn-info" type="submit" value="Salvar">
        </form>
    </div>


@endsection
