@extends('layouts.app')

@section('title', 'Tutoriais')

@section('content')

<h3>Informações do Tutorial</h3>

<h1 class="text-white">Tutorial Feito Por: {{$tutorialOwner ['name']}}</h1>


<p>ID: {{ $tutorial->id }}</p>
<p>Nome: {{ $tutorial->titulo }} </p>

<a href=" {{ route('tutoriais.index') }}">Voltar</a>

@endsection