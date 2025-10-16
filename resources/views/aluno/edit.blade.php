

    <h1>Editar Aluno</h1>
    <form actiom="{{ route("aluno.update",$aluno) }}" method="post"
    @csrf
    @method('PUT')
    <label for="">Matricula</label>
    <input type="text" name="matricula" id="nome">
<label for="">Nomes</label>
<input type="text" name="nome" id="nome">
<label for="">Email</label>
<input type="text" name="email" id="email">
<label for="">Data de Nascimento</label>
<input type="date" name="data_ nascimento" id="data nascimento",
<button type="submit">Cadastrar</button>
  </form>
@endsection