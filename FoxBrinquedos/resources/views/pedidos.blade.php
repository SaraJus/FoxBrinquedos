<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Concluído</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        h1 {
            color: #102B7B;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 50px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        h2 {
            color: #102B7B;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 40px;
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

        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
        }

        .navBar:hover {
            color: #43ADDA;
        }


        .navBar:visited {
            color: #102B7B;
        }

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

        /* cards */
        .card {
            background-color: white;
            text-align: center;
            margin: 10px;
        }

        .card-txt {
            color: #432075;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title {
            color: #432075;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>

<body>

    <header>
        <nav class="">
            <div class="line">
            </div>
            <div class="navbar navbar-light">
                <form class="form-inline nav-search">
                    <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
                    <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search" style=" width:326px; ">
                    <i class="btn btn-custom fa fa-search" type="submit"></i>
                </form>
                <div>
                    <i type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></i>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        <img class="botoesHeader" src="{{asset('user.png')}}" alt="">
                    </a>
                    @else
                    <a href="{{ route('Login.index') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('cadastro.index') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Register
                    </a>
                    @endif
                    @endauth
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center mb-3 mt-3 navBar">
                <a class="d-flex mr-3" href="">HOME</a>
                <a class="d-flex mr-3" href="{{asset('produto')}}">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="{{asset('contato')}}">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>

    <section>
        <div class="container mt-5">
            <h2 class="mt-5">Meus Pedidos</h2>
            @if($pedidos->isEmpty())
            <p>Você não tem pedidos.</p>
            @else
            <div class="row">
                @foreach($pedidos as $pedido)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header card-title">
                            Pedido #{{ $pedido->PEDIDO_ID }} - {{ $pedido->PEDIDO_DATA }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title card-txt">Status: {{ $pedido->status ? $pedido->status->STATUS_DESC : 'Status não definido' }}</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($pedido->itens as $item)
                                <li class="list-group-item card-txt">
                                    {{ $item->produto->PRODUTO_NOME }} - {{ $item->ITEM_QTD }} x R$ {{ number_format($item->ITEM_PRECO, 2, ',', '.') }}
                                </li>
                                @endforeach
                            </ul>
                            <p class="card-txt"><strong>Total:</strong> R$ {{ number_format($pedido->itens->sum(function($item) { return $item->ITEM_PRECO * $item->ITEM_QTD; }), 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
<hr>
            <!-- Endereços Section -->
            <h2 class="mt-5">Meus Endereços</h2>
            @if($enderecos->isEmpty())
            <p>Você não tem endereços cadastrados.</p>
            @else
            <div class="row">
                @foreach($enderecos as $endereco)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header card-title">
                            Endereço #{{ $endereco->ENDERECO_ID }}
                        </div>
                        <div class="card-body">
                            <p class="card-txt">Logradouro: {{ $endereco->ENDERECO_LOGRADOURO }}, {{ $endereco->ENDERECO_NUMERO }}</p>
                            <p class="card-txt">Complemento: {{ $endereco->ENDERECO_COMPLEMENTO }}</p>
                            <p class="card-txt">CEP: {{ $endereco->ENDERECO_CEP }}</p>
                            <p class="card-txt">Cidade: {{ $endereco->ENDERECO_CIDADE }}, {{ $endereco->ENDERECO_ESTADO }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

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
            <a href="{{asset('contato')}}">
                <p>Fale Conosco</p>
            </a>
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

</body>