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

        <form class="form" method="POST" action="{{route('cadastro.fornecedor.do')}}">
            @csrf
            <div class="card">
        
                    <h2 class="title">CADASTRO</h2>

                <div class="card-group">
                    <label>Nome</label>
                    <input type="text" name="namef" placeholder="Digite o nome" required>
                </div>

                <div class="card-group">
                    <label>CPF/CNPJ</label>
                    <input id="cpf_cnpj" type="text" name="CPF_CNPJf" placeholder="XX. XXX. XXX/0001-XX" onblur="mascara_cpf_cnpj()" maxlength="14"  required>
                </div>

                <div class="group_elements">
                    <div class="card-group">
                        <label>Telefone</label>
                        <input id="fone" type="text" name="fonef" placeholder="(XX) X XXXX-XXXX" onkeyup="mascara_fone()" maxlength="16" required>
                    </div>
                    <div class="card-group">
                        <label>Email</label>
                        <input type="email" name="emailf" placeholder="Digite o Email" required>
                    </div>
                </div>
                
                <div class="group_elements">
                    <div class="card-group">
                        <label>CEP</label>
                        <input id="cep" type="text" name="cep" placeholder="XXXXX-XXX" onkeyup="mascara_cep()" maxlength="9" required>
                    </div>
                    <div class="card-group">
                        <label>Estado</label>
                        <select name="est" id="estado" onchange="esconder()">
                            <option value="#">Selecione</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="PR">PR</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                </div>

                <div id="outros">
                    <label>Outro</label>
                    <input type="text" name="outro_estado" placeholder="Digite o Estado">
                </div>

                <div class="group_elements">
                    <div class="card-group">
                        <label>Cidade</label>
                        <input type="text" name="cidade" placeholder="Digite a Cidade" required>
                    </div>
                    <div class="card-group">
                        <label>Bairro</label>
                        <input type="text" name="bairro" placeholder="Digite o Bairro" required>
                    </div>
                </div>

                <div class="group_elements">
                    <div class="card-group">
                        <label>Rua</label>
                        <input type="text" name="rua" placeholder="Digite a Rua" required>
                    </div>
                    <div class="card-group">
                        <label>Número</label>
                        <input type="number" name="numero" placeholder="Digite o Número do local" required>
                    </div>
                </div>

                    <div class="botao">
                        <button type="submit">CADASTRAR</button>
                        <a class="botao_a" href="{{route('show')}}">VOLTAR</a>
                    </div>

            </div>
        </form>

                @if (session('msg'))
                    <script type="text/javascript">alert('{{ session('msg')}}')</script>
                @endif

    </main>

    <script src="{{asset(mix('assets/js/scripts.js'))}}"></script>
 
</body>
</html>