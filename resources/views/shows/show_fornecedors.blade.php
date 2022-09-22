<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href={{asset('css/style_cadastro_fornecedor.css') }}> 
  <title>EcoQR</title>
</head>
<body>

    <header>
        <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
            <ul class="nav-list">
              <li><a href="{{route('show.fornecedors')}}"><img src="{{asset(mix('assets/images/cadastroN.png'))}}" width="20" height="20" /> Fornecedor</a></li>
              <li><a href="cadastro.html"><img src="{{asset(mix('assets/images/cliente.png'))}}" width="20" height="20" /> Cliente</a></li>
              <li><a href="cadastro.html"><img src="{{asset(mix('assets/images/org2.png'))}}" width="20" height="20" /> Produto</a></li>
              <li><a href="cadastro.html"><img src="{{asset(mix('assets/images/venda1.png'))}}" width="20" height="20" /> Venda</a></li>
            </ul>
            <div class="logo_header">
                <a href="/"> <img src="{{asset(mix('assets/images/qrcode.png'))}}" width="40" height="40" /> </a>
                <a href="/"> EcoQR </a>
            </div>
            <a class="logout" href="login"><img src="{{asset(mix('assets/images/logout.png'))}}" width="30" height="30" /></a>
    </header>

    <main>
        
    </main>

    <script src="{{asset(mix('assets/js/scripts.js'))}}"></script>
 
</body>
</html>