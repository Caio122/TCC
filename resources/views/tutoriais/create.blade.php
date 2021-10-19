@extends('layouts.app')

@section('title', 'Tutoriais')

@section('content')


<h3>Novo Tutorial</h3>
<form action="{{ route('tutoriais.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="tutorial">
    <input type="submit" value="Salvar">
</form>

@endsection