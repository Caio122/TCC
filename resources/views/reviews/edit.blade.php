<h3>Editar Review</h3>

<form action="{{ route('review.update', $produtos['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $produtos['nome'] }}">
    <input type="submit" value="Salvar">
</form>

<a href=" {{ route('review.index') }}">Voltar</a>

