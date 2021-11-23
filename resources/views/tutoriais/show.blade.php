@extends('layouts.app')

@section('title', $tutorial->titulo)

@section('content')

    <!-- Começo do Tutorial -->
    <p class="text-white">Coescrito Por: <b class="text-info">{{ $tutorialOwner['name'] }}</b></p>
    <div class="container text-justify" style="font-size: 22px">
        <div class="col">
            <!-- Título do Tutorial -->
            <div class="content text-center my-5">
                <h1 class="title text-info">{{ $tutorial->titulo }}</h1>

                    <!-- Subtitulo do Tutorial -->
                    <p class="title text-white">{{ $tutorial->sbtitulo }}</p>

                    <!-- 1° Passo -->
                    <div class="container text-justify" style="font-size: 22px">
                        <div class="text-center mt-5 mb-5">
                            <h3 class="text-info">Passo 1</h3>
                            <img src="/img/tutoriais/{{ $tutorial->image }}" width="600" height="400">
                            <h6 class="card-title text-white">
                                {{ $tutorial->passou }}
                            </h6>
                            <h4 class="card-title text-white">
                            </h4>
                            <!-- 2° Passo -->
                            <div class="text-center mt-5 mb-5">
                                <h3 class="text-info">Passo 2</h3>
                                <img src="/img/tutoriais/{{ $tutorial->image }}" width="600" height="400">
                                <h6 class="card-title text-white">
                                    {{ $tutorial->passod }}
                                </h6>
                                <h4 class="card-title text-white">
                                </h4>
                            </div>
                            <!-- 3° Passo -->
                            <div class="text-center mt-5 mb-5">
                                <h3 class="text-info">Passo 3</h3>
                                <img src="/img/tutoriais/{{ $tutorial->image }}" width="600" height="400">
                                <h6 class="card-title text-white">
                                    {{ $tutorial->passot }}
                                </h6>
                                <h4 class="card-title text-white">
                                </h4>
                            </div>

                            <!-- 4° Passo -->
                            <div class="text-center mt-5 mb-5">
                                <h3 class="text-info">Passo 4</h3>
                                <img src="/img/tutoriais/{{ $tutorial->image }}" width="600" height="400">
                                <h6 class="card-title text-white">
                                    {{ $tutorial->passoq }}
                                </h6>
                                <h4 class="card-title text-white">
                                </h4>
                            </div>

                            <!-- 5° Passo -->
                            <div class="text-center mt-5 mb-5">
                                <h3 class="text-info">Passo 5</h3>
                                <img src="/img/tutoriais/{{ $tutorial->image }}" width="600" height="400">
                                <h6 class="card-title text-white">
                                    {{ $tutorial->passoc }}
                                </h6>
                                <h4 class="card-title text-white">
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            @endsection
