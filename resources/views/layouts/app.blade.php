<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Controle Acadêmico')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
</head>
<body>

<main>
    <div class="container">
        <nav class="mt-4 mb-4">
            <ul class="nav nav-tabs">

                <!-- Aluno -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Aluno</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('aluno.create') }}">Cadastrar</a>
                        <a class="dropdown-item" href="{{ route('aluno.index') }}">Visualizar</a>
                    </div>
                </li>

                <!-- Professor -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Professor</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('professor.create') }}">Cadastrar</a>
                        <a class="dropdown-item" href="{{ route('professor.index') }}">Visualizar</a>
                    </div>
                </li>

                <!-- Curso -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Curso</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('curso.create') }}">Registrar</a>
                        <a class="dropdown-item" href="{{ route('curso.index') }}">Visualizar</a>
                    </div>
                </li>

                <!-- Turma -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Turma</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('turma.create') }}">Registrar</a>
                        <a class="dropdown-item" href="{{ route('turma.index') }}">Visualizar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button typ="submit" class="btn btn-danger">Sai</button>
</form>
</li>
            </ul>
        </nav>
        @yield('content')
    </div>
</main>

<footer class="text-center mt-5 mb-3">
    <p>&copy; 2025 - Todos os direitos reservados</p>
</footer>

<!-- Scripts Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>