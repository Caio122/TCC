<h3>Nova Review</h3>
<form action="{{ route('reviews.store') }}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
</form>
