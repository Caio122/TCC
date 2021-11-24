@extends('layouts.app')

@section('title', 'Meu Perfil')

@section('content')

    <!-- Criação De Novas Reviews -->
    <div class="content text-center my-5">
        <div class="col">
            <h1 class="title text-info">Adicionar Review</h1>
            <a href="{{ route('reviews.create') }}">
                <h4 class="btn btn-info" style="color: white;" type="button">Nova Review</h4>
            </a>
        </div>
        <hr>

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
    </div>

@endsection
