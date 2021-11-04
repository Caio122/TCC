@extends('layouts.app')

@section('title', 'Notícias')

@section('content')

<!-- Adição da Nova Notícia Para o usuário -->
    <table>
      @foreach ($noticia as $noticias)
         <tr>
                <th scope="row">{{ $noticias->id }}</th>
                <td> {{ $noticias->titulo }}</td>
                <td> {{ $noticias->sbtitulo }}</td>
                <td> {{ $noticias->texto }}</td>
                <td>
                    <a href="{{ route('admin.noticias.show', $noticias->id) }}">Detalhes</a>
                    <a href="{{ route('admin.noticias.edit', $noticias->id) }}">Alterar</a>
                    <a href="{{ route('admin.noticias.delete', $noticias->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>  

    <!-- Parte De Notícias -->
    <h1 class="title text-info"> Últimas Notícias </h1>
    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/flash.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> The Flash: Chefe acredita que série pode ter “várias temporadas” na DC
                    </h2>
            </div>
    </a>
    <br />
    </div>
    <br />

 


@endsection
