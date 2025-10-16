<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Professor</h1>
    <form actiom="{{ route("professor, store") }}" method="post"
    @csrf
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome">
<label for="">Disciplina</label>
<input type="text" name="disciplina" id="disciplina">
<button type="submit"<Cadastrar</button>
</form>

</body>
</html>