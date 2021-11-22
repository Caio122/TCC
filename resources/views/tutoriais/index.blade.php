@extends('layouts.app')

@section('title', 'Tutoriais')

@section('content')



    <!-- Começo dos tutoriais -->
    <div class="container">
        <h1 class="title text-info"> Últimos Tutoriais</h1>


        @foreach ($tutorial as $tutoriais)
            <div class="row my-3">
                <article class="card-post">
                    <a href="{{ route('tutoriais.show', $tutoriais->id) }}">
                        <div style="float: left">
                            <img style="width: 300px; height: 200px" src="/img/tutoriais{{ $tutoriais->image }}">
                        </div>
                        <h3 style="display: table-cell; float: left; width: 300px; margin-left: 15px;"
                            class="card-title text-white">
                            {{ $tutoriais->titulo }}
                        </h3>
                    </a>
                </article>
            </div>
        @endforeach








    @endsection
