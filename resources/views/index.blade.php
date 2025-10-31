<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Sabor do Brasil')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f6f6f6;
      color: #222;
      text-align: center;
      
    }
 
    .borda {
  width: 90%;          
  max-width: 1100px;   
  margin: 30px auto;
  background: #fff;
  border: 1px solid #c4c1c1ff;


}


    .layout {
      display: flex;
    }
 
    .ladoesquerdo, .centro, .ladodireito {
      padding: 20px;
      box-sizing: border-box;
    }
 
    .ladoesquerdo, .ladodireito {
      width: 240px;
      background: #fafafa;
    }
 
    .centro {
      width: 620px;
    }
 
    .fotouser img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px; 
    }

    .fotouser h5 {
  margin-top: 10px;
  font-weight: bold;
}
 
    .bordalike {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 10px;
      text-align: center;
      margin-bottom: 10px;
    }
 
    .bordalike .num {
      font-size: 1.4rem;
      font-weight: bold; }
 
    .bordacard {
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-bottom: 16px;
      overflow: hidden;
    }
 
    .pratoimg {
      width: 100%;
      height: 220px;
      object-fit: cover;
      background: #ddd;
      display: block;
    }
 
    .post-body {
      padding: 12px 14px;
    }
 
    .descri {
      font-weight: bold;
      margin-bottom: 6px;
    }
 
      .rodape {
      background-color: #ff772eff;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      font-family: Arial, sans-serif;
      font-weight: bold;
    }
 
      .iconesrodape {
      display: flex;
      gap: 25px;
    }
 
      .iconesrodape img {
      width: 28px;
      height: 28px;
    }
 
 
    .btn-entrar {
      width:100%;
      padding:10px;
      background:#ff772eff;
      border:none;
      color:#fff;
      border-radius:6px;
      cursor:pointer;
    }
 
    .modal {
      display: none;
      position: fixed;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background: rgba(0,0,0,0.5);
      z-index: 1000;
    }
 
    .conteudo {
      background:#fff;
      width:300px;
      margin:10% auto;
      padding:20px;
      border-radius:8px;
      text-align:center;
    }
 
    .conteudo input {
      width: 100%;
      padding:8px;
      margin:6px 0;
      border:1px solid #ccc;
      border-radius:5px;
    }
 
    .botoes {
      display:flex;
      justify-content:space-between;
      margin-top:10px;
    }
 
    .botoes button {
      width:48%;
      padding:8px;
      border-radius:5px;
      cursor:pointer;
    }
 
    .cancelar {
      background: #fff;
      color: #ff772e;
      border: 1px solid #ff772e;
    }
 
    .entrar-modal {
      background: #ff772e;
      color:#fff;
      border:none;
    }

    .post-meta {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin-top: 10px;
  color: #444;
  font-size: 16px;
}

.post-meta i {
  margin-right: 6px;
  cursor: pointer;
  transition: 0.2s;
}

.post-meta i:hover {
  color: #ff772e;
}

.counters {
  display: flex;
  gap: 20px;
  align-items: center;
}

    </style>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body>
  <div class="borda">
    <div class="layout">
      <aside class="ladoesquerdo">
        <div class="fotouser">
        @guest
          <img src="logo_sabor_do_brasil.png" alt="">
          <h5>Sabor do Brasil</h5>
        @endguest
        
        @auth
          <img src="{{ Auth::user()->foto }}" alt="Logo">
          <h2>{{ Auth::user()->name}}</h2>
        @endauth 
  </div>
        <div class="bordalike">
          @guest
          <div class="num"> {{$likes_quant}}</div>
          @endguest

          @auth
          <div class="num"> {{$likes_quant_user}}</div>
          @endauth
          <small>Likes</small>
        </div>
        <div class="bordalike">
          @guest
          <div class="num"> {{$deslikes_quant}}</div>
          @endguest
          
          @auth
          <div class="num"> {{$deslikes_quant_user}}</div>
          @endauth
          <small>Dislikes</small>
        </div>
      </aside>
 
 
      <main class="centro">
      @foreach($publicacoes as $publicacao)
        <h3>Publicações</h3>
        <div class="bordacard">
          <img src="{{ asset($publicacao->foto) }}" alt="Prato 1" class="pratoimg">
          <div class="post-body">
            <div class="descri">{{$publicacao->descricao}}</div>
            <small>{{$publicacao->local}} • {{$publicacao->cidade}}</small>
          </div>

          <div class="post-meta">
            <div class="counters">
              <div class="like">
                <form action="{{ route('publicacoes.like', $publicacao) }}" method="POST">
                    @csrf
                    <button 
                    @auth 
                        onclick="this.form.submit()" 
                    @endauth
                    @guest
                        command="show-modal" commandfor="dialog"
                    @endguest>
                        @php
                            $liked = $publicacao->likes->where('user_id', auth()->id())->count() > 0;
                        @endphp
                        <img src="{{ asset('imagens/icones/' . ($liked ? 'flecha_cima_cheia.svg' : 'flecha_cima_vazia.svg')) }}" class="w-6 h-6">
                    </button>
                </form>
                <span>{{ $publicacao->likes->count() }}</span>
              </div>
              <div class="dislike">
                <form action="{{ route('publicacoes.deslike', $publicacao) }}" method="POST" class="ml-4">
                    @csrf
                    <button 
                    @auth 
                        onclick="this.form.submit()" 
                    @endauth
                    @guest
                        command="show-modal" commandfor="dialog"
                    @endguest>
                        @php
                            $disliked = $publicacao->deslikes->where('user_id', auth()->id())->count() > 0;
                        @endphp
                        <img src="{{ asset('imagens/icones/' . ($disliked ? 'flecha_baixo_cheia.svg' : 'flecha_baixo_vazia.svg')) }}" class="w-6 h-6">
                    </button>
                </form>
                <span>{{ $publicacao->deslikes->count() }}</span>
              </div>
              <div class="comment mb-4 ">
                <img src="imagens/icones/chat.svg" alt="">
                <span id="comment-count">2</span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </main>
      
 
      <aside class="ladodireito">
        @guest
          <button id="abrirModal" class="btn-entrar">Entrar</button>
        @endguest
 
        @auth
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-sair">Sair</button>
          </form>
        @endauth
      </aside>
    </div>
 
 <footer class="rodape">
  <div class="rodapeitem">Sabor do Brasil</div>
 
  <div class="iconesrodape">
    <img src="Instagram.svg" alt="Instagram">
    <img src="Twitter.svg" alt="Twitter">
    <img src="Whatsapp.svg" alt="Whatsapp">
    <img src="Globe.svg" alt="Site">
  </div>
 
  <div class="rodapeitem">Copyright - 2024</div>
</footer>
 
  <!-- MODAL DE LOGIN -->
  @guest
  <div id="modalLogin" class="modal">
    <div class="conteudo">
      <h3>Login</h3>
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full " type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
             <div class="botoes">
          <button type="button" id="cancelarLogin" class="cancelar">Cancelar</button>
          <button type="submit" class="entrar-modal">Entrar</button>
        </div>
      </form>
    </div>
  </div>
  @endguest
      
 
  <script>
    const modal = document.getElementById('modalLogin');
    const abrir = document.getElementById('abrirModal');
    const cancelar = document.getElementById('cancelarLogin');
 
    if(abrir) abrir.onclick = () => modal.style.display = 'block';
    if(cancelar) cancelar.onclick = () => modal.style.display = 'none';
    window.onclick = e => { if(e.target === modal) modal.style.display = 'none'; };
  </script>
 
</body>
</html>
 
 
 
 
 
 