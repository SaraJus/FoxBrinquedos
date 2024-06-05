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
    <h2>Resultados da Pesquisa</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4"></div>
    @if ($produtos->isEmpty())
    <p>Nenhum produto encontrado para o termo de pesquisa '{{ $termoPesquisa }}'.</p>
    @else
    <ul>
        @foreach($produtos as $produto)
        <div class="col">
            <div class="card">
                @if($produto->Imagem->isNotEmpty())
                <a href="{{route('produto.show',$produto->PRODUTO_ID)}}"><img src="{{$produto->Imagem->first()->IMAGEM_URL}}" class="card-img-top" alt="..."></a>
                @else
                <a href="{{route('produto.show',$produto->PRODUTO_ID)}}"><img src="..." class="card-img-top" alt="Imagem Padrão"></a>
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('produto.show',$produto->PRODUTO_ID)}}">{{($produto->PRODUTO_NOME)}}</a></h5>
                    <h6 class="card-preco">R${{($produto->PRODUTO_PRECO)}}
                        <p class="card-text">à vista</p>
                    </h6>
                    <form action="{{ route('carrinho.adicionar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="produto_id" value="{{ $produto->PRODUTO_ID }}">
                        <input type="hidden" name="quantidade" value="1">
                        <button class="btn btn-primary custom-btn" type="submit">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </ul>
    @endif


    <footer class="d-flex">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>