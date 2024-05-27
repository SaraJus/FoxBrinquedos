<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        hr {
            border-color: #102B7B;
        }

        h2 {
            color: #432075;
            align-items: center;
            justify-content: center;
            display: flex;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .logo {
            height: 75px;
            width: 75px;
        }

        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }

        .botoesHeader {
            width: 50px;
        }



        footer {
            background-color: #43adda;
            width: 100%;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
        }

        .imgFooter {
            width: 200px;
            height: 200px;
            left: 25px;
            position: relative;
        }

        .redesSociais {
            position: relative;
            top: 25px;
            left: 60px;
            height: 150px;
        }

        .redesImg {
            width: 50px;
            height: 50px;
        }

        .pagamento {
            position: absolute;
            padding-left: 1300px;
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

        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
        }

        .navBar :hover {
            color: #43ADDA;
        }

        .navBar:visited {
            color: #102B7B;
        }

        .card {
            background-color: white;
            margin: 40px;
            align-items: center;
        }

        .img-card-car {
            width: 100px;
            height: 100px;
            border-radius: 15px;
        }

        .resumo-compra {
            right: 0%;
        }

        .btn-finish {
            width: 100%;
            background-color: #432075;
            border-color: #432075;
            color: white;
            font-weight: bold;
            position: relative;
        }

        .btn-finish:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }

        .finalizar-compra {
            right: 0%;
        }

        .my-cart {
            color: #102B7B;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <nav class="">
            <div class="line">
            </div>
            <div class="navbar navbar-light">

                <form id="form-pesquisa" class="form-inline nav-search" action="{{ route('pesquisar.produto') }}" method="GET">
                    <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
                    <input id="search-input" class="form-control me-2" type="search" name="q" placeholder="Pesquisar" aria-label="Search" style=" width:326px; ">
                    <button class="btn btn-custom fa fa-search" type="submit"></button>
                </form>
                <div>
                    <i type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></i>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Register
                    </a>
                    @endif
                    @endauth
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center mb-3 mt-3 navBar">
                <a class="d-flex mr-3" href="">HOME</a>
                <a class="d-flex mr-3" href="">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>
    <section class="d-flex justify-content-between">
        <div class="container ml-5">
            <h1 class="mt-5 mb-5 my-cart">Meu Carrinho</h1>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if($carrinhoItens->isEmpty())
            <p class="mb-5 mt-5"><b>Seu carrinho está vazio.</b></p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Total</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrinhoItens as $item)
                    <tr>
                        <td>{{ $item->produto->PRODUTO_NOME }}</td>
                        <td>{{ $item->ITEM_QTD }}</td>
                        <td>R$ {{ number_format($item->produto->PRODUTO_PRECO, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($item->produto->PRODUTO_PRECO * $item->ITEM_QTD, 2, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('carrinho.remover', $item->PRODUTO_ID) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="total">
                <strong>Total: R$ {{ number_format($carrinhoItens->sum(function($item) { return $item->produto->produto_preco * $item->item_qtd; }), 2, ',', '.') }}</strong>
            </div>
            @endif
        </div>
        <div class="finalizar-compra mr-5 mb-3">
            <div class="resumo-compra align-items-center">
                <h2>Resumo da compra</h2>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item d-flex form-inline">
                        <p class="ml-3 mr-3 mb-0">Nome do item</p>
                        <p class="ml-3 mr-3 mb-0">preço</p>
                        <p class="ml-3 mr-3 mb-0">quantidade</p>
                    </li>
                </ul>
                <span class="d-flex justify-content-center mb-3">Total da compra</span>
                <button class="btn btn-finish d-flex justify-content-center">
                    <h3>Finalizar</h3>
                </button>
            </div>
        </div>
    </section>
    <footer class="d-flex bottom-0">
        <img class="imgFooter" src="{{asset('logo.png')}}" alt="">
        <div class="redesSociais">
            <p>Acompanhe nossas redes sociais</p>
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
    <script>
        document.getElementById('form-pesquisa').addEventListener('submit', function(event) {
            event.preventDefault();

            var searchTerm = document.getElementById('search-input').value.trim();

            window.location.href = "{{ route('pesquisar.produto') }}?q=" + encodeURIComponent(searchTerm);
        });
    </script>
</body>

</html>