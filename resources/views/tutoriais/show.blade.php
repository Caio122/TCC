@extends('layouts.app')

@section('title', $tutorial->titulo)

@section('content')

    <!-- Começo do texto -->
    <h4 class="text-white">Coescrito Por: {{ $tutorialOwner['name'] }}</h4>
    <div class="container text-justify" style="font-size: 22px">
        <div class="col">
            <!-- Título do Texto -->
            <div class="content text-center my-5">
                <h1 class="title text-info">Título Do Tutorial</h1>
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
