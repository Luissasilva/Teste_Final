<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
</head>
<body>
    <title>@yield('title', 'Sabor do Brasil')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* --- Reset visual leve --- */
    body {
      margin: 0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background:#f6f6f6;
      color:#000000;
    }
    .wrap {
      width: 1100px; /* largura fixa */
      margin: 30px auto;
      background: #fff;
      border: 1px solid #fff9f4ff;
      box-shadow: 0 3px 12px #fff(246, 236, 236, 0.03);
      overflow: hidden;
    }
    .layout {
      display: flex;
      align-items: flex-start;
      gap: 0;
    }
    .col-left {
      width: 240px;
      padding: 20px;
      border-right:1px solid #ececec;
      background:#fafafa;
      box-sizing: border-box;
    }
    .col-center {
      width: 620px;
      padding: 20px;
      box-sizing: border-box;
    }
    .col-right {
      width: 240px;
      padding: 20px;
      border-left:1px solid #ececec;
      background:#fafafa;
      box-sizing: border-box;
    }
    .brand {
      display:flex;
      gap:12px;
      align-items:center;
      margin-bottom: 18px;
    }
    .logo {
      width:72px;
      height:72px;
      border-radius:8px;
      background:#eee;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight:700;
      text-align:center;
      padding:6px;
    }
    .metric {
      text-align:center;
      margin-bottom:12px;
      padding:10px;
      border-radius:6px;
      background:#fff;
      border:1px solid #efefef;
    }
    .metric .num { font-weight:700; font-size:1.4rem; }
    .metric small { color:#777; display:block; font-size:.82rem; }

  
    .post-card {
      background:#fff;
      border:1px solid #e9e9e9;
      border-radius:6px;
      margin-bottom:16px;
      overflow:hidden;
    }
    .post-img {
      width:100%;
      height:220px;
      object-fit:cover;
      display:block;
      background:#ddd;
    }
    .post-body { padding:12px 14px; }
    .post-title { font-weight:700; margin-bottom:6px; }
    .post-meta {
      display:flex;
      justify-content:space-between;
      align-items:center;
      color:#666;
      font-size:.9rem;
      margin-top:8px;
    }
    .counters { display:flex; gap:14px; align-items:center; }

   
    .btn-entrar { width:100%; margin-bottom:14px; }

    /* --- Rodapé dentro do container --- */
    .page-footer {
      background:#333;
      color:#fff;
      padding:10px 18px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      font-size:.9rem;
    }

  </style>
</head>
<body>

  <div class="wrap">
    <div class="layout">
      <aside class="col-left">
        <div class="brand">
           <img src={{asset("logo_sabor_brasil.png")}} alt="Logo Sabor do Brasil">
          <div>
            <h5 class="mb-0">Sabor do Brasil</h5>
          </div>
        </div>
 
        <div style="display:flex; gap:8px; margin-bottom:10px;">
          <div style="flex:1;">
            <div class="metric">
              <div class="num">9</div>
              <small>Quantidade<br>Likes</small>
            </div>
          </div>
          <div style="flex:1;">
            <div class="metric">
              <div class="num">12</div>
              <small>Quantidade<br>Dislikes</small>
            </div>
          </div>
        </div>

        <div style="display:flex; gap:8px;">
        </div>
      </aside>

      COLUNA CENTRAL -->
      <!-- <main class="col-center">
        <h4 style="margin-top:4px; margin-bottom:14px;">Publicações</h4>


        <article class="post-card">
          <img src="placeholder.jpg" alt="Prato 1" class="post-img">
          <div class="post-body">
            <div class="post-title">Título do prato 01</div>
            <div class="small text-muted">Local 01 • Maceió-AL</div>

            <div class="post-meta">
              <div class="counters">
                <div><i class="bi bi-hand-thumbs-up"></i> 2</div>
                <div><i class="bi bi-hand-thumbs-down"></i> 1</div>
                <div><i class="bi bi-arrow-repeat"></i> 1</div>
              </div>
              <div><i class="bi bi-chat"></i> 4</div>
            </div>
          </div>
        </article>

 
        <article class="post-card">
          <img src="placeholder.jpg" alt="Prato 2" class="post-img">
          <div class="post-body">
            <div class="post-title">Título do prato 02</div>
            <div class="small text-muted">Local 02 • Maceió-AL</div>

            <div class="post-meta">
              <div class="counters">
                <div><i class="bi bi-hand-thumbs-up"></i> 9</div>
                <div><i class="bi bi-hand-thumbs-down"></i> 1</div>
                <div><i class="bi bi-arrow-repeat"></i> 1</div>
              </div>
              <div><i class="bi bi-chat"></i> 10</div>
            </div>
          </div>
        </article>

     
        <article class="post-card">
          <img src="placeholder.jpg" alt="Prato 3" class="post-img">
          <div class="post-body">
            <div class="post-title">Título do prato 03</div>
            <div class="small text-muted">Local 03 • Maceió-AL</div>

            <div class="post-meta">
              <div class="counters">
                <div><i class="bi bi-hand-thumbs-up"></i> 2</div>
                <div><i class="bi bi-hand-thumbs-down"></i> 1</div>
                <div><i class="bi bi-arrow-repeat"></i> 1</div>
              </div>
              <div><i class="bi bi-chat"></i> 2</div>
            </div>
          </div>
        </article>

      </main>

      <aside class="col-right">
        <div>
          <button class="btn btn-primary btn-entrar"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
        </div>
      </aside>
    </div>


    <div class="page-footer">
      <div>Sabor do Brasil</div>
      <div style="display:flex; gap:12px; align-items:center;">
        <i class="bi bi-instagram"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-whatsapp"></i>
        <small style="margin-left:12px;">Copyright - 2025</small>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<main>
@yield('content')
@auth
<form method="POST" action="{{ route('logout')}}">
    @csrf
    <button type="submit">
        Sair
    </button>
</form>
@endauth
<footer class="text-center mt-5 mb-3">
    <p>&copy; 2025 - Todos os direitos reservados</p>
</footer>


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