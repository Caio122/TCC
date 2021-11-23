@extends('layouts.app')

@section('title', 'Editando Review')

@section('content')

    <!-- Indicação Para Editar Review -->
    <div id="editar-review-container" class="col-md-3 offset-md-4">
        <h1 class="text-white">Edite Sua Review</h1>
        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Editando Título De Review Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Título Da Review</label>
                <textarea class="class form-control" id="titulo"  wrap="soft"  maxlength="60" name="titulo"
                    placeholder="Título da Review" value="{{ $review->titulo }}" required autocomplete="titulo"></textarea>
            </div>

            <!-- Editando subtítulo De Review Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Subtítulo Da Review</label>
                <textarea class="class form-control" id="sbtitulo"  wrap="soft"  maxlength="60" name="sbtitulo"
                    placeholder="Subtítulo da Review" value="{{ $review->sbtitulo }}" required autocomplete="sbtitulo"></textarea>
            </div>

            <!-- Editando Conteúdo De Review Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo Da Review</label>
                <textarea name="texto" id="texto"  wrap="soft"  class="form-control" placeholder="Conteúdo da Review"
                 value="{{ $review->texto }}" required autocomplete="texto"></textarea>
            </div>
            <input class="btn btn-info" type="submit" value="Salvar">
        </form>
    </div>





@endsection