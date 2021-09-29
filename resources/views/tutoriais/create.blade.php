<h3>Nova Review</h3>
<form action="{{ route('tutoriais.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="tutorial">
    <input type="submit" value="Salvar">
</form>
