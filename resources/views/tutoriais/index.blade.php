@extends('layouts.app')

@section('title', 'Tutoriais')

@section('content')


    
    <!-- Começo dos tutoriais -->
    <h1 class="title text-info ml-5"> Últimos Tutoriais</h1>
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Primeira coluna de tutoriais -->
            <div class="col-sm-5 mx-auto">
                <!-- Tutoriais em si -->
                @foreach ($tutorial as $tutoriais)
                    <a class="image" href="{{ route('tutoriais.show', $tutoriais->id)}}">
                        <img class="card-img-top" src="/img/tutoriais/{{ $tutoriais->image}}">
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="{{ route('tutoriais.show', $tutoriais->id)}}">
                            <h4 class="card-title text-white">{{$tutoriais->titulo}}</h4>
                        </a>
                    </div>
                    @endforeach 

                <div class="card-post mb-5">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/register.jpeg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Registrar-se na Digital Monkey
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/register.jpeg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Registrar-se na Digital Monkey
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Segundo coluna de tutoriais -->
            <div class="col-sm-5 mx-auto">
                <!-- Tutoriais em si-->
                <div class="card-post mb-5">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-primary">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>

                            <h4 class="card-title text-white">Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Começo de Mais Vistos -->
        <div class="row bg-dark">
            <h2 class="text-info text-nowrap my-2 ml-4">
                Mais Vistos:
            </h2>

        </div>
        <div class="row bg-dark">
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>
                            <h4 class="card-title text-white">
                                Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>
                            <h4 class="card-title text-white">
                                Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="card-post">
                    <a class="image" href="/segunda">
                        <img class="card-img-top" src="img/brita.jpg" />
                    </a>
                    <div class="card-body bg-dark">
                        <a class="card-link"
                            href="/segunda">
                            <h6 class="card-subtitle mt-2 text-info">Como</h6>
                            <h4 class="card-title text-white">
                                Peneirar a brita
                            </h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
