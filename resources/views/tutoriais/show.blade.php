@extends('layouts.app')

@section('title', $tutorial->titulo)

@section('content')

  <!-- Começo do texto -->
  <div class="container text-justify" style="font-size: 22px">
    <div class="col">
        <!-- Título do Texto -->
        <div class="content text-center my-5">
            <h1 class="title text-info">Título Do Tutorial</h1>
            <br>
            <!-- 1° Passo -->
            <div class="container text-justify" style="font-size: 22px">
                <div class="text-center">
                    <img src="/img/tutoriais/{{ $tutorial->image}}" width="600" height="400">
                    <h6 class="card-title text-white">
                        {{$tutorial->passo}}
                    </h6>
                    <h4 class="card-title text-white">
                        {{$tutorial->conteudo}}
                    </h4>
                    <br>
                    <br>
                    <br>
                    <br>

                    <!-- 2° Passo -->
                    <div class="text-center">
                        <img src="/img/tutoriais/{{ $tutorial->image}}" width="600" height="400">
                        <h6 class="card-title text-white">
                            {{$tutorial->passo}}
                        </h6>
                        <h4 class="card-title text-white">
                            {{$tutorial->conteudo}}
                        </h4>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <!-- 3° Passo -->
                    <div class="text-center">
                        <img src="/img/tutoriais/{{ $tutorial->image}}" width="600" height="400">
                        <h6 class="card-title text-white">
                            {{$tutorial->passo}}
                        </h6>
                        <h4 class="card-title text-white">
                            {{$tutorial->conteudo}}
                        </h4>
                    </div>
                </div>
            </div>
        </div>

@endsection
