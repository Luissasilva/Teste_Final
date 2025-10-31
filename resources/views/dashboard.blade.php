<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página do Usuário - Sabor do Brasil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #f6f6f6;
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .layout {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .perfil {
      width: 250px;
      text-align: center;
    }

    .perfil img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }

    .centro {
      width: 650px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      border: 1px solid #ccc;
    }

    .publicacao {
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 20px;
      overflow: hidden;
    }

    .publicacao img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .post-meta {
      display: flex;
      justify-content: space-around;
      padding: 10px;
      color: #444;
    }

    footer {
      background: #ff772e;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <div class="layout">
    Perfil à esquerda
    <div class="perfil">
      <img src="usuario_01.jpg" alt="Usuario" class="pratoimg" >
      <h5>usuario_01</h5>
      <p>2 Likes | 1 Deslike</p>
      <form action="index.html">
        <button class="btn btn-warning btn-sm" type="submit">Sair</button>
      </form>
    </div>

    Centro com publicações
    <div class="centro">
      <h3>Publicações</h3>

      <div class="publicacao">
        <img src="publicacao01.png" alt="Prato 1">
        <p><strong>Título do prato 01</strong></p>
        <p>Local 01 • Maceió-AL</p>
        <div class="post-meta">
      <div class="btn-group" role="group">
        @auth
        <form method="POST" action="{{ route('like', $publicacao->id) }}">
            @csrf
            <!-- <button type="submit" class="btn btn-light">
                @if(session("liked_{$publicacao->id}"))
                    <img src="{{ asset('imagens/icons8-polegar-para-cima-32.png') }}" alt="like" width="20">
                @else
                    <img src="{{ asset('imagens/icons8-polegar-para-cima-32.png') }}" alt="like" width="20">
                @endif
            </button>
        </form>
        
        <form method="POST" action="{{ route('dislike', $publicacao->id) }}">
            @csrf
            <button type="submit" class="btn btn-light">
                @if(session("disliked_{$publicacao->id}"))
                    <img src="{{ asset('imagens/icons8-polegar-para-baixo-32.png') }}" alt="dislike" width="20">
                @else
                    <img src="{{ asset('imagens/icons8-polegar-para-baixo-32.png') }}" alt="dislike" width="20">
                @endif
            </button> -->
        </form>
       </div>
          <div><i class="bi bi-chat"></i> 4</div>
        </div>
      </div>

      <div class="publicacao">
        <img src="publicacao02.png" alt="Prato 2">
        <p><strong>Título do prato 02</strong></p>
        <p>Local 02 • Maceió-AL</p>
        <div class="post-meta">
          <div><i class="bi bi-hand-thumbs-up"></i> 9</div>
          <div><i class="bi bi-hand-thumbs-down"></i> 1</div>
          <div><i class="bi bi-chat"></i> 10</div>
        </div>
      </div>

       <div class="bordacard">
          <img src="publicacao03.png" alt="Prato 3" class="pratoimg">
          <div class="post-body">
            <div class="descri">Título do prato 03</div>
            <small>Local 01 • Maceió-AL</small>
          </div>
        </div>
    </div>
  </div>

  <!-- <div class="btn-group" role="group">
        @auth
        <form method="POST" action="{{ route('like', $publicacao->id) }}">
            @csrf
            <button type="submit" class="btn btn-light">
                @if(session("liked_{$publicacao->id}"))
                    <img src="{{ asset('imagens/icons8-polegar-para-cima-32.png') }}" alt="like" width="20">
                @else
                    <img src="{{ asset('imagens/icons8-polegar-para-cima-32.png') }}" alt="like" width="20">
                @endif
            </button>
        </form> -->
        
        <!-- <form method="POST" action="{{ route('dislike', $publicacao->id) }}">
            @csrf
            <button type="submit" class="btn btn-light">
                @if(session("disliked_{$publicacao->id}"))
                    <img src="{{ asset('imagens/icons8-polegar-para-baixo-32.png') }}" alt="dislike" width="20">
                @else
                    <img src="{{ asset('imagens/icons8-polegar-para-baixo-32.png') }}" alt="dislike" width="20">
                @endif
            </button>
        </form> -->

        <span>{{ $publicacao->likes()->count() }} Likes</span>
<span>{{ $publicacao->dislikes()->count() }} Dislikes</span>

  <footer>
    <span>Sabor do Brasil</span>
    <span>Copyright - 2024</span>
  </footer>

</body>
</html>
