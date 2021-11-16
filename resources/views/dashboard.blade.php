@extends('layouts.app')

@section('title', 'Meu Perfil')

@section('content')

<h1 class="text-white">Tristeza, rapaiz </h1>

<a href ="{{ route('reviews.create') }}">
    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Review</h4>
</a>

{{-- <div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1 class="title text-white">Minhas Reviews</h1>
</div>
<div class="col-md-10 offset-md-1 noticias-container">
        @if (count($review) > 0)
        @else
            <p class="title text-info">Você Ainda Não Tem Reviews <a href="{{ route('noticias.create') }}">
                    <h4 class="my-2 ml-5 btn btn-info" style="color: white;" type="button">Nova Notícia</h4>
                </a>
            </p>
        @endif
</div> --}}

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Minhas Reviews') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Aqui é onde ficaram as reviews do usuário!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
