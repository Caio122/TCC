@extends('layouts.app')

@section('title', 'Review Sobre Resident Evil 4')

@section('content')

<h3 class="text-white">Review Feita Por: "Usuário"</h3>

            <!-- Começo do texto -->
            <div class="container text-justify" style="font-size: 22px">
                <div class="col">
                    <!-- Título do Texto -->
                    <div class="content text-center my-5">
                        <h1 class="title text-info">Título Da Review</h1>
                        <!-- Subtítulo -->
                        <p class="text-white">
                            Subtítulo Da Review
                        </p>
                        <!-- Imagem do Texto -->
                        <div class="text-center">
                            <img src="img/re4.jpg" class="img-fluid">
                        </div>
                    </div>
                    <!-- Texto em si -->
                    <div class="content text-center my-5">
                        <p class="text-white">
                            Conteúdo Da Review
                        </p>

                    </div>
                </div>
            </div>



    @endsection
