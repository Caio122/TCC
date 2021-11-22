@extends('layouts.app')

@section('title', 'Criando Tutorial')

@section('content')

    <!-- Indicação Para Criar Tutorial -->
    <div id="criar-tutorial-container" class="col-md-3 offset-md-4">
        <h1 class="title text-white">Crie Seu Tutorial</h1>
        <form action="{{ route('tutoriais.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Adicionando Imagem do Tutorial -->
            <div class="form-group">
                <label for="image" class="title text-info">Imagem Para o Tutorial:</label>
                <input type="file" id="image" name="image" class="from-control-file" required autocomplete="image">
            </div>

            <!-- Adicionando Título do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">Título do Tutorial</label>
                <textarea id="titulo" type="text" class="class form-control" maxlength="60" name="titulo"
                    placeholder="Título do Tutorial" required autocomplete="titulo" wrap="soft"></textarea>
            </div>

            <!-- Adicionando 1° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">1° Passo Do Tutorial</label>
                <textarea id="passou" type="text" class="class form-control" maxlength="280" name="passou"
                    placeholder="1° Passo do Tutorial" required autocomplete="passou" wrap="soft"></textarea>
            </div>

            <!-- Adicionando 2° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">2° Passo Do Tutorial</label>
                <textarea id="passod" type="text" class="class form-control" maxlength="280" name="passod"
                    placeholder="2° Passo do Tutorial" required autocomplete="passod" wrap="soft"></textarea>
            </div>

            <!-- Adicionando 3° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">3° Passo Do Tutorial</label>
                <textarea id="passot" type="text" class="class form-control" maxlength="280" name="passot"
                    placeholder="3° Passo do Tutorial" required autocomplete="passot" wrap="soft"></textarea>
            </div>
            
            <!-- Adicionando 4° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">4° Passo Do Tutorial</label>
                <textarea id="passoq" type="text" class="class form-control" maxlength="280" name="passoq"
                    placeholder="4° Passo do Tutorial" required autocomplete="passoq" wrap="soft"></textarea>
            </div>

            <!-- Adicionando 5° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">5° Passo Do Tutorial</label>
                <textarea id="passoc" type="text" class="class form-control" maxlength="280" name="passoc"
                    placeholder="5° Passo do Tutorial" required autocomplete="passoc" wrap="soft"></textarea>
            </div>

            <!-- Botão Para Salvar Tutorial -->
            <input class="btn btn-info" type="submit" value="Salvar">
            
        </form>
    </div>


@endsection

