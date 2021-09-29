<h3>Nova Notícia</h3>
<form action="{{ route('noticias.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="noticia">
    <input type="submit" value="Salvar">
</form>
