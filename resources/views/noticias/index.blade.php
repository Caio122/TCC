@extends('layouts.app')

@section('title', 'Notícias')

@section('content')

<!-- Adição da Nova Notícia Para o usuário -->
<table class="text-white">
    @foreach ($noticia as $noticias)
        <tr>
                <th scope="row">{{ $noticias->id }}</th>
                <td> {{ $noticias->titulo }}</td>
                {{-- <img src="/img/noticias/{{ $noticia->image}}"> --}}
                <td>
                    <a class ="title text-info" href="{{ route('admin.noticias.show', $noticias->id) }}">Detalhes</a>
                    <a class ="title text-info" href="{{ route('admin.noticias.edit', $noticias->id) }}">Alterar</a>
                    <a class ="title text-info" href="{{ route('admin.noticias.delete', $noticias->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach
</table>  

<!-- Parte De Notícias -->
<h1 class="title text-info ml-4"> Últimas Notícias </h1>
    
<div class="container">
    <div class="row">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>

    <div class="row mt-4">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>

    <div class="row mt-4">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>

    <div class="row mt-4">
        <article class="card-post">
            <a href="/primeira">
                <div style="float: left;" >
                    <img src="img/flash.jpg" height="200px" width="300px">
                </div>
                <h3 style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="card-title text-white"> 
                    The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                </h3>
            </a>
        </article>
    </div>

</div>


@endsection
