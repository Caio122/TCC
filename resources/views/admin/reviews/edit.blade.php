@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Editando Título De Review Já Criada -->
    <div id="editar-review-container" class="col-md-3 offset-md-4">
        <h1 class="text-white">Editar Review</h1>
        <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Title" class="title text-info">Título Da Review</label>
                <input type="text" class="class form-control" id="titulo" maxlength="60" name="titulo"
                    placeholder="Título da Review" value="{{ $review->titulo }}">
            </div>

            <!-- Editando subtítulo De Review Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Subtítulo Da Review</label>
                <input type="text" class="class form-control" id="sbtitulo" maxlength="60" name="sbtitulo"
                    placeholder="Subtítulo da Review" value="{{ $review->sbtitulo }}">
            </div>

            <!-- Editando Conteúdo De Review Já Criada -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo Da Review</label>
                <input type="text" name="texto" id="texto" class="form-control" placeholder="Conteúdo da Review"
                 value="{{ $review->texto }}">
            </div>
            <input class="btn btn-info" type="submit" value="Salvar">
        </form>
    </div>






    {{-- <!-- Edição De Reviews Já Criada -->
    <h3 class="text-white">Editar Review</h3>

    <form action="{{ route('admin.reviews.update', $review->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" value="{{ $review->titulo }}">
        <input type="text" name="sbtitulo" value="{{ $review->sbtitulo }}">
        <input type="text" name="texto" value="{{ $review->texto }}">
        <input type="submit" value="Salvar">
    </form> --}}

@endsection