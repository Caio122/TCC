@extends('layouts.app')

@section('title', 'Administrativo')

@section('content')

    <!-- Criação De Novos Eventos -->
    <div class="col">
        <h1 class="title text-info">Adicionar Eventos</h1>
            <a href="{{ route('noticias.create') }}">
                <h4 class="btn btn-info" style="color: white;" type="button">Nova Notícia</h4>
            </a>
            <a href="{{ route('reviews.create') }}">
                <h4 class="btn btn-info" style="color: white;" type="button">Nova Review</h4>
            </a>
            <a href="{{ route('tutoriais.create') }}">
                <h4 class="btn btn-info" style="color: white;" type="button">Novo Tutorial</h4>
            </a>
    </div>
    <hr>

    <!-- Tabela Das Notícias -->
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 class="text-info">Minhas Notícias</h1>
    </div>
    <div class="col-md-10 offset-md-1 noticias-container">
        @if (count($noticia) > 0)
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th class="title text-white" scope="col">#</th>
                        <th class="title text-white" scope="col">Título</th>
                        <th class="title text-white" scope="col">Conteúdo</th>
                        <th class="title text-white" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticia as $noticias)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $noticias->titulo }}</td>
                            <td>
                                <a href="{{ route('admin.noticias.show', $noticias->id) }}">
                                    <button type="submit" class="btn btn-info">
                                        Ir Para Notícia
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.noticias.edit', $noticias->id) }}">
                                    <button type="submit" class="btn btn-info">
                                        Editar
                                    </button>
                                </a>
                            </td>
                            <td>

                                <form action="noticias/delete/{{ $noticias->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.noticias.delete', $noticias->id) }}">
                                        <button type="submit" class="btn btn-danger">
                                            Deletar
                                        </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5 class="title text-white">Você Ainda Não Tem Notícias 
            </h5>
        @endif
    </div>

    <!-- Tabela Das Reviews -->
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 class="title text-info">Minhas Reviews</h1>
    </div>
    <div class="col-md-10 offset-md-1 reviews-container">
        @if (count($review) > 0)
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th class="title text-white" scope="col">#</th>
                        <th class="title text-white" scope="col">Título</th>
                        <th class="title text-white" scope="col">Conteúdo</th>
                        <th class="title text-white" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($review as $reviews)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $reviews->titulo }}</td>
                            <td>
                                <a href="{{ route('reviews.show', $reviews->id) }}">
                                    <button type="submit" class="btn btn-info">
                                        Ir Para Notícia
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('reviews.edit', $reviews->id) }}">
                                    <button type="submit" class="btn btn-info">
                                        Editar
                                    </button>
                                </a>
                            </td>
                            <td>

                                <form action="reviews/delete/{{ $reviews->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('reviews.delete', $reviews->id) }}">
                                        <button type="submit" class="btn btn-danger">
                                            Deletar
                                        </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5 class="title text-white">Você Ainda Não Tem Reviews</h5>
        @endif
    </div>

    <!-- Tabela Dos Tutoriais -->
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 class="title text-info">Meus Tutoriais</h1>
    </div>
    <div class="col-md-10 offset-md-1 tutorial-container">
        @if (count($tutorial) > 0)
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th class="title text-white" scope="col">#</th>
                        <th class="title text-white" scope="col">Título</th>
                        <th class="title text-white" scope="col">Conteúdo</th>
                        <th class="title text-white" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutorial as $tutoriais)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $tutoriais->titulo }}</td>
                            <td>
                                <a href="{{ route('tutoriais.show', $tutoriais->id) }}">
                                    <button type="submit" class="btn btn-info">
                                        Ir Para Notícia
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('tutoriais.edit', $tutoriais->id) }}">
                                    <button type="submit" class="btn btn-info">
                                        Editar
                                    </button>
                                </a>
                            </td>
                            <td>

                                <form action="tutoriais/delete/{{ $tutoriais->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('tutoriais.delete', $tutoriais->id) }}">
                                        <button type="submit" class="btn btn-danger">
                                            Deletar
                                        </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h5 class="title text-white">Você Ainda Não Tem Tutoriais 
            </h5>
        @endif
    </div>

    <!-- Adição de novas Notícias -->


    <!-- Adição de novas Reviews -->
    {{-- <a href ="{{ route('reviews.create') }}">
    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Review</h4>
</a> --}}

@endsection
