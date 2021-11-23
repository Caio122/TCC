@extends('layouts.app')

@section('title', 'Editando Tutorial')

@section('content')

    <!-- Indicação Para Editar Tutorial -->
    <div id="editar-tutorial-container" class="col-md-3 offset-md-4">
        <h1 class="title text-white">Edite Seu Tutorial</h1>
        <form action="{{ route('tutoriais.update', $tutorial->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Editando Título do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">Título do Tutorial</label>
                <textarea id="titulo" type="text" class="class form-control" name="titulo"
                    placeholder="Título do Tutorial" required autocomplete="titulo" wrap="soft"></textarea>
            </div>

            <!-- Adicionando Subtítulo do Tutorial -->
            <div class="form-group"> 
                <label for="Title" class="title text-info">Subtítulo Do Tutorial</label>
                <textarea class="class form-control" id="sbtitulo"  name="sbtitulo" placeholder="Subtítulo do Tutorial" required autocomplete="sbtitulo"></textarea>
            </div>

            <!-- Editando 1° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">1° Passo Do Tutorial</label>
                <textarea id="passou" type="text" class="class form-control" name="passou"
                    placeholder="1° Passo do Tutorial" required autocomplete="passou" wrap="soft"></textarea>
            </div>


            <!-- Editando 2° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">2° Passo Do Tutorial</label>
                <textarea id="passod" type="text" class="class form-control"  name="passod"
                    placeholder="2° passo do Tutorial" required autocomplete="passod" wrap="soft"></textarea>
            </div>

            <!-- Editando 3° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">3° Passo Do Tutorial</label>
                <textarea id="passot" type="text" class="class form-control"  name="passot"
                    placeholder="3° Passo do Tutorial" required autocomplete="passot" wrap="soft"></textarea>
            </div>

            <!-- Editando 4° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">4° Passo Do Tutorial</label>
                <textarea id="passoq" type="text" class="class form-control"  name="passoq"
                    placeholder="4° Passo do Tutorial" required autocomplete="passoq" wrap="soft"></textarea>
            </div>

            <!-- Editando 5° Passo do Tutorial -->
            <div class="form-group">
                <label for="Title" class="title text-info">5° Passo Do Tutorial</label>
                <textarea id="passoc" type="text" class="class form-control"  name="passoc"
                    placeholder="5° Passo do Tutorial" required autocomplete="passoc" wrap="soft"></textarea>
            </div>

            
            <!-- Botão Para Salvar Tutorial -->
            <input class="btn btn-info" type="submit" value="Salvar">
            
        </form>
    </div>

@endsection