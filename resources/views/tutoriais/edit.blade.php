@extends('layouts.app')

@section('title', 'Editando Tutorial')

@section('content')

    <!-- Adicionando Título do Tutorial -->
    <div id="editar-tutorial-container" class="col-md-3 offset-md-4">
        <h1 class="title text-white">Crie Seu Tutorial</h1>
        <form action="{{ route('tutoriais.update', $tutorial->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Title" class="title text-info">Título do Tutorial</label>
                <textarea id="titulo" type="text" class="class form-control" maxlength="60" name="titulo"
                    placeholder="Título do Tutorial" required autocomplete="titulo" wrap="soft"></textarea>
            </div>

            <!-- Adicionando Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">1° Passo Do Tutorial</label>
                <textarea id="passo" type="text" class="class form-control" maxlength="280" name="passo"
                    placeholder="1° Passo do Tutorial" required autocomplete="passo" wrap="soft"></textarea>
            </div>

            <!-- Adicionando Conteúdo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo do 1° Passo</label>
                <textarea name="conteudo" id="conteudo" class="form-control" placeholder="Conteúdo do Tutorial" required
                    autocomplete="conteudo" word wrap="break-word" ></textarea>
            </div>

            <!-- Adicionando 2° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">2° Passo Do Tutorial</label>
                <textarea id="passo" type="text" class="class form-control" maxlength="280" name="passo"
                    placeholder="2° Passo do Tutorial" required autocomplete="passo" wrap="soft"></textarea>
            </div>

            <!-- Adicionando Conteúdo do 2° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">Conteúdo do 2° Passo</label>
                <textarea name="conteudo" id="conteudo" class="form-control" placeholder="Conteúdo do Tutorial" required
                    autocomplete="conteudo" word wrap="break-word" ></textarea>
            </div>
            

            <!-- Botão Para Salvar Tutorial -->
            <input class="btn btn-info" type="submit" value="Salvar">
            
        </form>
    </div>

@endsection