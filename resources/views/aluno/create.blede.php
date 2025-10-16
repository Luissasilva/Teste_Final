@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST"> enctype="multipart/form."
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection