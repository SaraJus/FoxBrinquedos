<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #43ADDA 10%, transparent 10%),
                radial-gradient(circle, #FFA800 10%, transparent 10%),
                radial-gradient(circle, #EFEBEB 10%, transparent 10%);
            background-position: 0 0, 50px 50px, 100px 100px;
            background-size: 150px 150px;
            z-index: -1;
            opacity: 0.1;
        }

        hr {
            border-color: #102B7B;
        }

        h2 {
            color: #432075;
            text-align: center;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        h3 {
            color: #102B7B;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }


        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }


        .logo {
            height: 75px;
            width: 75px;
        }


        .botoesHeader {
            width: 50px;
        }


        hr {
            border-color: #102B7B;
        }



        /* resumo da compra */
        .resumo {
            display: flex;
            justify-content: space-between;
        }

        .endereco_entrega {
            margin-left: 50px;
            padding-bottom: 20px;
        }

        /* para poder manter do lado de finalizar */
        .finalizar-compra-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 0 50px;
        }

        /* resumo da compra fim */

        /* método de pagamento */
        .dropdown-pagamento {
            display: flex;
            flex-direction: column;
            gap: 0px;
            margin-left: 700px;
        }

        .dropdown-pagamento .col {
            margin-bottom: 10px;
        }

        .bloco2 {
            position: absolute;
            text-align: center;
        }

        /* método de pagamento */

        /* Estilos para o footer */
        footer {
            background-color: #43adda;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
            margin-top: 30px;
        }

        /* Estilos para imagens no footer */
        .imgFooter {
            width: 200px;
            height: 200px;
            position: relative;
        }

        /* Estilos para ícones de redes sociais */
        .redesImg {
            width: 50px;
            height: 50px;
        }

        /* Estilos para o bloco de formas de pagamento */
        .pagamento {
            position: absolute;
            margin-top: 40px;
            margin-right: 40px;
            right: 0px;
        }

        .pagamentoImg {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .pagamentoTxt {
            gap: 20px;
        }

        .btn-finish {
            margin-left: 10px;
            margin-right: 10px;
            background-color: #fff;
            border-color: #432075;
            color: #432075;
            font-weight: bold;
            position: relative;
            width: 300px;
        }

        .btn-finish:hover {
            background-color: #432075;
            top: -2px;
            border-bottom: 2px solid #432075;
            color: #fff;
        }

        .custom-btn {
            width: 100%;
            background-color: #432075;
            border-color: #432075;
            color: white;
            font-weight: bold;
            position: relative;
        }

        .custom-btn:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }

        .btn-success{
            width: 100%;
        }

        .endereco{
            padding-right: 200px;
        }

        
        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 700px;
        }

        .dropbtn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .dropbtn:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .botoesHeader {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            min-width: 200px;
            z-index: 1;
            animation: fadeIn 0.3s;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #102B7B;
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #form-pesquisa {
            display: flex;
            align-items: center;
        }

        #form-pesquisa .logo {
            margin-right: 10px;
        }

        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        #search-input {
            width: 326px;
            padding-right: 35px;
            /* espaço para o ícone de pesquisa */
        }

        .btn-custom.fa-search {
            position: absolute;
            right: 10px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: #102B7B;
        }

        .navBar {
            border-radius: 5px;
            align-items: center;
            justify-content: center;
        }

        .navBar a,
        .navBar {
            color: #102B7B !important;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navBar a:hover,
        .navBar .dropdown-toggle:hover {
            color: #43ADDA !important;
        }

        .dropdown-menu {
            background-color: white;
            border: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);

        }

        .dropdown-menu a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-menu a:hover {           
         background-color: #102B7B;
            color: white !important;

        }

        @media (max-width: 768px) {
            .navBar {
                flex-direction: column;
                align-items: center;
            }

            .navBar a,
            .navBar .dropdown-toggle {
                margin-bottom: 10px;
            }
        }

        .link-a {
            color: #102B7B;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
            margin: 0 20px;
            margin-left: 665px;
        }

        .link-a:hover {
            color: #43ADDA;
            text-decoration: none;

        }
        a{
            color: #102B7B;
        }
        a:hover{
            color: #432075;
            text-decoration: none;
        }
    </style>
</head>

<body>
<header>
    <nav x-data="{ open: false }">
        <div class="line">
        </div>
        <div class="navbar navbar-light">
            <form id="form-pesquisa" class="form-inline nav-search" action="{{ route('pesquisar.produto') }}" method="GET">
                <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
                <div class="search-container">
                    <input id="search-input" class="form-control" type="search" name="q" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-custom fa fa-search" type="submit"></button>
                </div>
            </form>

            <div>

                @if (Route::has('login'))
                @auth

                <div class="dropdown">
                    <button class="dropbtn">
                        <img class="botoesHeader" src="{{asset('user.png')}}" alt="User Icone">
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('profile.edit') }}">Editar seu Perfil</a>
                        <a href="{{ url('dashboard') }}">Meus pedidos</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                Sair</a>

                        </form>
                    </div>
                </div>
                @else
                <div class="links-container">
                <a href="{{ route('login') }}" class="link-a" id="link-a">
                    Log in
                </a>
                </div>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="link-a">
                    Cadastro
                </a>
               
                @endif
                @endauth
                @endif
          
            </div>
            <a type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></></a>

        </div>
    </nav>
    <hr>
    <div class="d-flex justify-content-center mb-2 mt-2 navBar">
        <a class="d-flex mr-3 nav-link" href="{{route('index')}}">HOME</a>
        <a class="d-flex mr-3 nav-link" href="{{route('produto.index')}}">BRINQUEDOS</a>
        <a class="nav-link dropdown-toggle" href="#" id="categoriaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIA
        </a>
        <ul class="dropdown-menu" aria-labelledby="categoriaDropdown">
            @foreach(\App\Models\Categoria::where('CATEGORIA_ATIVO', 1)->get() as $categoriaItem)
            <a class="dropdown-item" href="{{ route('categoria', ['categoria_nome' => $categoriaItem->CATEGORIA_NOME]) }}">
                {{ $categoriaItem->CATEGORIA_NOME }}
            </a>
            @endforeach
        </ul>
        <a class="d-flex mr-3 nav-link" href="{{route('contato.index')}}">CONTATO</a>
    </div>
    <hr>
    </nav>
    
    </header>
    <div class="container mt-5">
        <h2>Finalizar Pedido</h2>

        <form action="{{ route('pedido.finalizar') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-md-8 endereco">
                    <!-- Lista de Endereços -->
                    <h2 class="mt-5">Endereço de Entrega</h2>
                    @if($enderecos->isEmpty())
                    <p>Você não tem endereços cadastrados.</p>
                    @else
                    <div class="form-group">
                        @foreach($enderecos as $endereco)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="endereco_id" value="{{ $endereco->ENDERECO_ID }}" id="endereco{{ $endereco->ENDERECO_ID }}" required>
                            <label class="form-check-label" for="endereco{{ $endereco->ENDERECO_ID }}">
                                {{ $endereco->ENDERECO_LOGRADOURO }}, {{ $endereco->ENDERECO_NUMERO }} - {{ $endereco->ENDERECO_CIDADE }}, {{ $endereco->ENDERECO_ESTADO }} - CEP: {{ $endereco->ENDERECO_CEP }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <!-- Método de Pagamento -->
                    <h2 class="mt-5">Método de Pagamento</h2>
                    <div class="accordion" id="paymentMethods">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPix">
                                <button class="btn btn-primary custom-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePix" aria-expanded="true" aria-controls="collapsePix">
                                    <i class="bi bi-currency-exchange"></i> PIX
                                </button>
                            </h2>
                            <div id="collapsePix" class="accordion-collapse collapse show" aria-labelledby="headingPix" data-bs-parent="#paymentMethods">
                                <div class="accordion-body text-center">
                                    <!-- Conteúdo do PIX -->
                                    <p>Use o QR code abaixo para pagar com PIX:</p>
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=EXAMPLEPIX" alt="QR Code PIX">
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingBoleto">
                                <button class="btn btn-primary custom-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBoleto" aria-expanded="false" aria-controls="collapseBoleto">
                                    <i class="bi bi-file-earmark-text"></i> Boleto Bancário
                                </button>
                            </h2>
                            <div id="collapseBoleto" class="accordion-collapse collapse" aria-labelledby="headingBoleto" data-bs-parent="#paymentMethods">
                                <div class="accordion-body text-center">
                                    <!-- Conteúdo do Boleto Bancário -->
                                    <p>Use o código de barras abaixo para pagar com Boleto Bancário:</p>
                                    <img src="https://fakeimg.pl/350x80/?text=1234.5678.9123.4567.8901.2345.6789.123456" alt="Código de Barras Boleto">
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCredito">
                                <button class="btn btn-primary custom-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCredito" aria-expanded="false" aria-controls="collapseCredito">
                                    <i class="bi bi-credit-card"></i> Cartão de Crédito
                                </button>
                            </h2>
                            <div id="collapseCredito" class="accordion-collapse collapse" aria-labelledby="headingCredito" data-bs-parent="#paymentMethods">
                                <div class="accordion-body">
                                    <!-- Conteúdo do Cartão de Crédito -->
                                    <div class="mb-3">
                                        <label for="cardName" class="form-label">Nome no Cartão</label>
                                        <input type="text" class="form-control" id="cardName" name="cardName" placeholder="Nome como aparece no cartão">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cardNumber" class="form-label">Número do Cartão</label>
                                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Número do cartão">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cardExpiry" class="form-label">Data de Validade</label>
                                            <input type="text" class="form-control" id="cardExpiry" name="cardExpiry" placeholder="MM/AA">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cardCVC" class="form-label">Código de Segurança (CVC)</label>
                                            <input type="text" class="form-control" id="cardCVC" name="cardCVC" placeholder="CVC">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Resumo da Compra -->
                    <h2 class="mt-5">Resumo da Compra</h2>
                    <div class="card">
                        <div class="card-header">Resumo</div>
                        <div class="card-body">
                            <p class="card-text"><strong>Quantidade de Itens:</strong> {{ $quantidadeTotal }}</p>
                            <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($valorTotal, 2, ',', '.') }}</p>
                            <p class="card-text"><strong>Frete:</strong> R$ 0,00</p>
                            <hr>
                            <p class="card-text"><strong>Total:</strong> R$ {{ number_format($valorTotal, 2, ',', '.') }}</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg mt-3">Finalizar Compra</button>
                </div>
            </div>
        </form>
    </div>


    <footer class="d-flex">
        <img class="imgFooter" src="{{asset('logo.png')}}" alt="">
        <div class="redesSociais">
            <p class="mt-3">Acompanhe nossas redes sociais</p>
            <div class="d-flex">
                <a href=""><img class="redesImg" src="{{asset('insta.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('wpp.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('face.png')}}" alt=""></a>
                <a href=""><img class="redesImg" src="{{asset('linked.png')}}" alt=""></a>
            </div>
            <p>Fale Conosco</p>
            <p>Troca e Devolução</p>
        </div>
        <div class="pagamento">
            <p>Formas de Pagamento</p>
            <div class="d-flex">
                <img class="pagamentoImg" src="{{asset('cartao.png')}}" alt="">
                <img class="pagamentoImg" src="{{asset('boleto.png')}}" alt="">
                <img class="pagamentoImg" src="{{asset('pix.png')}}" alt="">
            </div>
            <div class="d-flex pagamentoTxt">
                <p>Cartão</p>
                <p>Boleto</p>
                <p>Pix</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>