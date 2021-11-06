@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<!-- Criação De Novas Reviews -->

    <!-- Adicionando Título da Notícia -->
    <div id="criar-review-container" class="col-md-3 offset-md-4">
        <h1 class="title text-white">Crie Sua Review</h1>
        <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
            <div class="form-group"> 
                <label for="Title" class="title text-info">Título Da Review</label>
                <input type="text" class="class form-control" id="titulo" maxlength="60" name="titulo" placeholder="Título da Review">
            </div>
    
        <!-- Adicionando Subtítulo da Review -->
            <div class="form-group"> 
                <label for="Title" class="title text-info">Subtítulo Da Review</label>
                <input type="text" class="class form-control" id="sbtitulo" maxlength="60" name="sbtitulo" placeholder="Subtítulo da Review">
            </div>
    
        <!-- Adicionando Conteúdo da Review -->
            <div class="form-group"> 
                <label for="Title" class="title text-info">Conteúdo Da Review</label>
                <textarea name="texto" id="texto" class="form-control" placeholder="Conteúdo da Review"></textarea>
            </div>
    
            <!-- Botão Para Salvar Review -->
            <input class="btn btn-info" type="submit" value="Salvar">
        </form>
    </div>











    {{-- <h3 class="ml-4 text-info">Nova review</h3>

    <form action="{{ route('reviews.store') }}" method="POST" class="my-auto mr-auto form-inline">
    @csrf
    <ol>

        <li><input style="color: white;" class="form-control bg-dark ml-4" type="text" maxlength="60" name="titulo" placeholder="Título Da Notícia"> </li>
    
        <li><input style="color: white;" class="form-control bg-dark ml-4" type="text" maxlength="60" name="sbtitulo" placeholder="Subtítulo Da Notícia"></li>
    
        <li><textarea name="texto" rows="5" cols="20" id="texto" class="form-control mceNoEditor"></textarea></li>
    
        <li><input class ="btn btn-info" type="submit" value="Salvar"></li>
    
        </form>
    </ol> --}}
 

    
@endsection