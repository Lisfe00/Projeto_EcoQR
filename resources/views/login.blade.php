<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href={{asset('css/style_login.css') }}> 
  <title>EcoQR</title>
</head>
<body>

    <header>
            <div class="logo_header">
                <a href="#"> <img src="{{asset(mix('assets/images/qrcode.png'))}}" width="40" height="40" /> </a>
                <a href="#"> EcoQR </a>
            </div>
    </header>

    <main>
        
        <form action="/" method="GET">
            <div class="card">
                <div class="card-group-img">
                    <img src="{{asset(mix('assets/images/login.png'))}}" width="150">
                </div>
                <div class="card-group">
                    <label>Login</label>
                    <input type="text" name="login" >
                </div>
                <div class="card-group">
                        <label>Senha</label>
                            <input type="password" name="senha" id="senha">
                            <div class="card-group-senha">
                            <img id="img_cadeado_aberto" onclick="mostrar_senha()" src="{{asset(mix('assets/images/cadeado_aberto.png'))}}" width="40">
                            <img id="img_cadeado_fechado" onclick="mostrar_senha()" src="{{asset(mix('assets/images/cadeado_fechado.png'))}}" width="40">
                        </div>
                <div class="div_botao">
                    <button class="botao" type="submit">Entrar</button>
                </div>
            </div>
        </form>

    </main>

    <footer>
        Contato: ecoqr@gmail.com &bull; 2022 &copy;
    </footer>

    <script src="{{asset(mix('assets/js/scripts.js'))}}"></script>
</body>
</html>