@extends('layouts.app')

@section('title', 'Notícias')

@section('content')


    <!-- Parte De Notícias -->
    <div class="container">
        <h1 class="title text-info"> Últimas Notícias </h1>

        <!-- Adição da Nova Notícia Para o usuário -->
        @foreach ($noticia as $noticias)
            <div class="row">
                <article class="card-post">
                    <a href="{{ route('admin.noticias.show', $noticias->id) }}">
                        <div style="float: left">
                            <img style="width: 300px; height: 200px" src="/img/noticias/{{ $noticias->image }}">
                        </div>
                        <h3 style="display: table-cell; float: left; width: 300px; margin-left: 15px;"
                            class="card-title text-white">
                            {{ $noticias->titulo }}
                        </h3>
                    </a>
                </article>
            </div>
            <tr>
                <th scope="row">{{ $noticias->id }}</th>
                <td> {{ $noticias->titulo }}</td>
                <td>
                    <a class="title text-info" href="{{ route('admin.noticias.edit', $noticias->id) }}">Alterar</a>
                    <form action="noticias/delete/{{ $noticias->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            href="{{ route('admin.noticias.delete', $noticias->id) }}">Deletar </button>
                    </form>
                </td>
            </tr>

        @endforeach

        <!-- Aqui Começa a Lista Das Notícias-->
        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>


        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>

        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>

        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>

        <div class="row mt-4">
            <article class="card-post">
                <a href="/primeira">
                    <div style="float: left;">
                        <img src="img/flash.jpg" height="200px" width="300px">
                    </div>
                    <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;"
                        class="card-title text-white">
                        The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h3>
                </a>
            </article>
        </div>
    </div>

@endsection
