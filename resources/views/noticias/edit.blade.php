<h3>Editar Notícia</h3>
<form action="{{ route('noticias.update', $noticia->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $noticia->nome }}">
    <input type="submit" value="Salvar">
</form>

