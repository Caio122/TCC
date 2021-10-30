@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

<!-- Criação De Novas Reviews -->
    <h3 class="ml-4 text-info">Nova review</h3>

    <form action="{{ route('reviews.store') }}" method="POST" class="my-auto mr-auto form-inline">
    @csrf
    <input style="color: white;" class="form-control bg-dark ml-4" type="text" name="titulo" placeholder="Título Da Review">
    <input class ="btn btn-info" type="submit" value="Salvar">
    </form>

    
@endsection