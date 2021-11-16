@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Criação De Novas Notícias -->
    {{-- <h3 class="ml-4 text-info">Nova Notícia</h3> --}}
    

    {{-- class="my-auto mr-auto form-inline" O QUE ESSA CLASS FAZ NO FORM? --}} 


    <!-- Adicionando Título da Notícia -->
    <div id="criar-noticia-container" class="col-md-3 offset-md-4">
    <h1 class="title text-white">Crie Sua Notícia</h1>
    <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group"> 
            <label for="Title" class="title text-info">Título Da Notícia</label>
            <input id="titulo" type="text" class="class form-control"  maxlength="60" name="titulo" placeholder="Título da Notícia" required autocomplete="titulo">
        </div>

    <!-- Adicionando Subtítulo da Notícia -->
        <div class="form-group"> 
            <label for="Title" class="title text-info">Subtítulo Da Notícia</label>
            <input id="sbtitulo" type="text" class="class form-control" maxlength="180" name="sbtitulo" placeholder="Subtítulo da Notícia" required autocomplete="sbtitulo">
        </div>

  <!-- Adicionando Imagem da Notícia -->
        <div class="form-group"> 
            <label for="image" class="title text-info">Imagem Para Notícia:</label>
            <input type="file" id="image" name="image" class="from-control-file" required autocomplete="image">
        </div> 

    <!-- Adicionando Conteúdo da Notícia -->
        <div class="form-group"> 
            <label for="Title" class="title text-info">Conteúdo Da Notícia</label>
            <textarea name="texto" id="texto" class="form-control" placeholder="Conteúdo da Notícia" required autocomplete="texto"></textarea>
        </div>

        <!-- Botão Para Salvar Notícia -->
        <input class="btn btn-info" type="submit" value="Salvar">
    </form>
</div>
    

@endsection