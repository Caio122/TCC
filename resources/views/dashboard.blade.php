@extends('layouts.app')

@section('title', 'Meu Perfil')

@section('content')

<div class="container">
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
</div>

@endsection
