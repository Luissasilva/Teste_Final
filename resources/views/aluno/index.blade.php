@extends('layouts')
@section('title','Dados do aluno')
    <h1>Lista de Alunos</h1>
    <table>
        <thead>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nacimento</th>
            <th>Opções</th>
  </thead>
  <tbody>
    @foreach(@alunos as $aluno)
    <tr>
        <td>{{ $aluno->matricula}}</td>
        <td>{{ $aluno->nome}}</td>
        <td>{{ $aluno->email}}</td>
        <td>{{ $aluno->data_nascimento}}</td>
       <td>
        <a href="{{ route('aluno.edit', $aluno->id)}}">Editar</a>
         <a href="{{ route('aluno.show', $aluno->id)}}">Visualizar</a>
         <form action="{{ route(aluno.destroy,$aluno->id) }}" method="post">
            @csrf
            @method('delete')
            <button type"submit">Excluir</button>
         </form>
        <td>
</tr>
@endforeach
</tbody>
</table>
