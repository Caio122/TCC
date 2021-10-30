@extends('layouts.app')

@section('title', 'Reviews')

@section('content')

<!-- Adição da Nova Notícia Para o usuário -->
<table>
    @foreach ($review as $reviews)
       <tr>
              <th scope="row">{{ $reviews->id }}</th>
              <td> {{ $reviews->titulo }}</td>
              <td>
                  <a href="{{ route('admin.reviews.show', $reviews->id) }}">Detalhes</a>
                  <a href="{{ route('admin.reviews.edit', $reviews->id) }}">Alterar</a>
                  <a href="{{ route('admin.reviews.delete', $reviews->id) }}">Deletar</a>
              </td>
          </tr>
      @endforeach
  </table>  

    <!-- Parte De Reviews -->
    <h1 class="title text-info"> Últimas Reviews </h1>
    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />

    <a href="/primeira">
        <div style=" display: table;" class="conteudo">
            <div style="display: table-cell;float: left;" class="imagem">
                <img style="border: 5px solid #3299CC" src="img/re4.jpg" height="200px" width="300px">
            </div>
            <div style=" display: table-cell; float: left; width: 300px; margin-left: 15px;" class="texto">
                <h3 class="card-title text-white"> Minha Review Sobre Resident Evil 4</h2>
            </div>
    </a>
    <br />
    </div>
    <br />


@endsection
