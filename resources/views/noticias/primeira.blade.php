@extends('layouts.app')

@section('title', 'Notícia Sobre The Flash')

@section('content')

<h3 class="text-white">Notícia Feita Por: "Administrador"</h3>

            <!-- Começo do texto -->
            <div class="container text-justify" style="font-size: 22px">
                <div class="col">
                    <!-- Título do Texto -->
                    <div class="content text-center my-5">
                        <h1 class="title text-info">Título Da Notícia</h1>
                        <!-- Subtítulo -->
                        <p class="text-white">
                            Subtítulo Da Notícia
                        </p>
                        <!-- Imagem do Texto -->
                        <div class="text-center">
                            <img src="img/flash.jpg" class="img-fluid">
                        </div>
                    </div>
                    <!-- Texto em si -->
                    <div class="content text-center my-5">
                        <p class="text-white">
                            Conteúdo Da Notícia
                        </p>

                    </div>
                </div>
            </div>



    @endsection
