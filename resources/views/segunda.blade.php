@extends('layouts.app')

@section('title', 'Penera a Brita')

@section('content')


    <!-- Começo do texto -->
    <div class="container text-justify" style="font-size: 22px">
        <div class="row">
            <!-- Título do Texto -->
            <div class="content text-center my-5">
                <h1 class="title text-info">Título Do Tutorial</h1>
                <br>
                <!-- 1° Passo -->
                <div class="container text-justify" style="font-size: 22px">
                    <div class="text-center">
                        <img src="img/brita.jpg" class="img-fluid" alt="penera" width="600" height="400">
                        <h6 class="card-title text-white">
                            1º Passo
                        </h6>
                        <h4 class="card-title text-white">
                            Rebola moss
                        </h4>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!-- 2° Passo -->
                        <div class="text-center">
                            <img src="img/brita.jpg" class="rounded" alt="..." width="600" height="400">
                            <h6 class="card-title text-white">
                                2º Passo
                            </h6>
                            <h4 class="card-title text-white">
                                Peneira a bita, vamo
                            </h4>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!-- 3° Passo -->
                        <div class="text-center">
                            <img src="img/brita.jpg" class="rounded" alt="..." width="600" height="400">
                            <h6 class="card-title text-white">
                                3º Passo
                            </h6>
                            <h4 class="card-title text-white">
                                Vamo meu fi
                            </h4>
                        </div>
                    </div>
                </div>
            </div>



            <script src="./node_modules/jquery/dist/jquery.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.js"></script>
            <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

        @endsection
