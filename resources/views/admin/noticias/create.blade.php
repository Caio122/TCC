@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Criação De Novas Notícias -->
    <h3 class="ml-4 text-info">Nova Notícia</h3>
    
    <form action="{{ route('noticias.store') }}" method="POST" class="my-auto mr-auto form-inline">
    @csrf
    <input style="color: white;" class="form-control bg-dark ml-4" type="text" name="titulo" placeholder="Titulo Da Notícia">
    <input class ="btn btn-info" type="submit" value="Salvar">
    </form>

   

@endsection