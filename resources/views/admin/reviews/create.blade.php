@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<!-- Criação De Novas Reviews -->
    <h3 class="ml-4 text-info">Nova review</h3>

    <form action="{{ route('reviews.store') }}" method="POST" class="my-auto mr-auto form-inline">
    @csrf
    <ol>

        <li><input style="color: white;" class="form-control bg-dark ml-4" type="text" maxlength="60" name="titulo" placeholder="Título Da Notícia"> </li>
    
        <li><input style="color: white;" class="form-control bg-dark ml-4" type="text" maxlength="60" name="sbtitulo" placeholder="Subtítulo Da Notícia"></li>
    
        <li><textarea name="texto" rows="5" cols="20" id="texto" class="form-control mceNoEditor"></textarea></li>
    
        <li><input class ="btn btn-info" type="submit" value="Salvar"></li>
    
        </form>
    </ol>
 

    
@endsection