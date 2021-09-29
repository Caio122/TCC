<h3>Editar Tutorial</h3>
<form action="{{ route('tutoriais.update', $tutorial->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $tutorial->nome }}">
    <input type="submit" value="Salvar">
</form>

