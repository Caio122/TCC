@extends('layouts.app')

@section('title', 'Tutoriais')

@section('content')


    <h3 class="ml-4 text-info">Novo Tutorial</h3>
    <form action="{{ route('tutoriais.store') }}" method="POST" class="my-auto mr-auto form-inline">
    @csrf
    <input style="color: white;" class="form-control bg-dark ml-4" type="text" name="titulo" placeholder="Título do Tutorial">
    <input class ="btn btn-info" type="submit" value="Salvar">
    </form>

@endsection