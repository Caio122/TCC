@extends('layouts.app')

@section('title', 'Tutorias')

@section('content')

   

    <!-- Barra com as categorias, pesquisa e donate -->
    <nav class="navbar navbar-expand-lg bg-dark border-top border-bottom border-info">
        <a class="navbar-brand ml-auto" href="">
            <img src="./img/donate.png"/>
        </a>
        <ul class="navbar-nav mr-auto px-5">
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('noticias.index')}}">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('reviews')}}">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{route('tutoriais.index')}}">Tutoriais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-info" href="{{url('sobre')}}">Sobre</a>
            </li>
        </ul>
        <form class="form-inline my-auto mr-auto px-5">
            <input style="position: relative; top: 0px; right: -105px;" class="form-control form-control-sm bg-dark"
                type="search">
        </form>
    </nav>

    <h1 class="title text-info"> Página de Tutoriais </h1>

    <!-- Parte Do CRUD De Tutoriais -->
    <h2 style="color: white;">Tutoriais</h2>
    <a style="color: white;" href ="{{ route('tutoriais.create') }}">Novo Tutorial</a>
    <br><br>
    <table>
      @foreach ($tutorial as $tutoriais)
         <tr>
                <th scope="row">{{ $tutoriais->id }}</th>
                <td> {{ $tutoriais->nome }}</td>
                <td> {{ $tutoriais->quantidade }}</td>
                <td>
                    <a href="{{ route('tutoriais.show', $tutoriais->id) }}">Detalhes</a>
                    <a href="{{ route('tutoriais.edit', $tutoriais->id) }}">Alterar</a>
                    <a href="{{ route('tutoriais.delete', $tutoriais->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>  



@endsection
