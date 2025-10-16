@extends('layouts')
@section('title','ContactoProfessor')
    <h1>ContactoProfessor</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Email</th>
            <th>Telefone</th>
         
  <tbody>
    @foreach(@ContactoProfesso as $ContactoProfesso)
    <tr>
        <td>{{ $ContactoProfesso->Id}}</td>
        <td>{{ $ContactoProfesso->Email}}</td>
        <td>{{ $ContactoProfesso->Telefone}}</td>
      
       <td>
        <a href="{{ route('ContactoProfesso.edit', $ContactoProfesso->id)}}">Editar</a>
         <a href="{{ route('ContactoProfesso.show', $ContactoProfesso->id)}}">Visualizar</a>
         <form action="{{ route(ContactoProfesso.destroy,$ContactoProfesso->id) }}" method="post">
            @csrf
            @method('delete')
            <button type"submit">Excluir</button>
         </form>
        <td>
</tr>
@endforeach
</tbody>
</table>