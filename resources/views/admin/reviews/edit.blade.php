@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Edição De Notícias Já Criada -->
    <h3 class="text-white">Editar Review</h3>

    <form action="{{ route('admin.reviews.update', $review->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" value="{{ $review->titulo }}">
        <input type="submit" value="Salvar">
    </form>

@endsection