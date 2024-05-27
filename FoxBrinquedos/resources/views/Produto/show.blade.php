<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brinquedo</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Estilos CSS inline */
        body {
            margin: 0;
            height: 100vh;
            width: 100%;
        }
        h2 {
            color: #432075;
            text-align: center;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }


        /* Linha colorida no header */
        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }

        /* Estilo para o logo */
        .logo {
            height: 75px;
            width: 75px;
        }

        /* Estilos para os botões no header */
        .botoesHeader {
            width: 50px;
        }

        /* Estilo para a barra horizontal */
        hr {
            border-color: #102B7B;
        }

        /* Estilos para a barra de navegação */
        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
        }

        /* Cor do link no hover */
        .navBar:hover {
            color: #43ADDA;
        }

        /* Cor do link visitado */
        .navBar:visited {
            color: #102B7B;
        }

        /* Estilos para a seção de informações do produto */
        .info_produto {
            display: flex;
            flex-direction: column;
            float: right;
            margin-right: 350px;
            margin-top: -300px;
        }

        /* Estilos para os métodos de pagamento */
        .pagamentos {
            display: flex;
            gap: 10px;
            margin-left: 715px;
            margin-top: -100px;
        }

        /* Estilo para os botões de quantidade */
        .circulo,
        .oval {
            width: 30px;
            height: 30px;
            border-radius: 200px;
            background-color: bisque;
            color: black;
            display: flex;
            text-align: center;
            justify-content: center;
            cursor: pointer;
            border: 1px solid bisque;
        }

        .oval {
            width: 60px;
            height: 30px;
        }

        /* Estilo para o botão 'Adicionar ao Carrinho' */
        .adicionar {
            background-color: orange;
            width: 200px;
            height: 40px;
            border-radius: 10px;
            text-align: left;
            margin-left: 200px;
        }

        /* Estilos para a descrição do produto */
        .descricao {
            width: 650px;
            height: 200px;
            background-color: bisque;
            display: flex;
            margin-top: 100px;
            margin-left: 330px;
            border-radius: 10px;
        }

        /* Estilos para o card do produto */
        .card_produto {
            margin-left: 300px;
            border: none;
            height: 400px;
            width: 1000px;
            margin-top: 30px;
            padding-bottom: 30px;
        }

        .card-title {
            font-size: 25px;
            text-transform: uppercase;
        }

        .card-text {
            font-size: 22px;
        }

        .title-desc {
            text-align: center;
            margin-top: 20px;
        }

        /* Estilo para a imagem dentro do card de produto */
        .card_produto img {
            width: 300px;
            padding-bottom: 20px;
        }

        /* Estilos para os botões de quantidade */
        .btn_adicionar {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        /* Estilos para o card do corpo do produto */
        .card-body2 {
            width: 100%;
            height: 250px;
            background-color: #ededed;
            border-radius: 5px;
            border: none;
            gap: 10px;
            margin-top: 50px;
            text-align: justify;
        }

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

        .carousel-item img {
            width: auto;
            height: 350px;
            /* Defina a altura desejada para as imagens */
            object-fit: fill;
            /* Redimensiona a imagem mantendo a proporção e cobrindo o espaço */
        }

        /*CSS CARD SARA*/

        .img-top {
            width: 150px;
            height: 150px;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-left: 10px;
            margin-top: 5px;
        }

        .card-titlee {
            font-size: 12px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 2px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }

        .card-textt {
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            padding-left: 5px;
            margin-top: 2px;

        }

        .cardd {
            background-color: white;
            text-align: center;
            margin: 10px;
        }

        .card-precoo {
            color: #432075;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
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


    </style>
</head>

<body>
    <!-- Conteúdo do cabeçalho -->
    <header>
        <nav class="">
            <div class="line"></div>
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
                <a class="d-flex mr-3" href="{{route('produto.index')}}">HOME</a>
                <a class="d-flex mr-3" href="">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>


    <h2>PRODUTO</h2>

    <!-- Card do Produto -->
    <div class="card mb-2">
        <div class="card_produto">
            <div class="row g-0">
                <div class="col-md-4">

                    <!-- Imagem do Produto -->

                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

                        <!-- foreach que puxa as imagens do banco -->
                        <!-- Imagem do Produto -->
                        <div class="carousel-inner">
                            @foreach($produto->Imagem as $key => $img)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ $img->IMAGEM_URL }}" class="d-block w-100" alt="Imagem {{ $key }}">
                            </div>
                            @endforeach
                        </div>

                        <div cteste">
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>

                            <button type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">

                    <div class="card-body">
                        <!-- Informações do Produto -->

                        <p class="card-title">{{($produto->PRODUTO_NOME)}}</p>
                        <p> <s>De: R$ <span id="precoOriginal">{{ $produto->PRODUTO_PRECO }}</s></span></p>
                        <p>Por: R$ <span id="precoComDesconto"></span></p>


                        <!-- Estoque -->

                        <p class="card-text">Estoque: <small id="estoque">{{$produto->Estoque->PRODUTO_QTD}}</p></small>

                        <!-- Botões de Adicionar/Remover do estoque -->
                        <button class="btn" onclick="adicionar()">+</button>
                        <span id="quantidade">1</span>
                        <button class="btn" onclick="remover()">-</button>


                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit">ADICIONAR</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <h3 class="title-desc">DESCRIÇÃO</h3>
    <textarea class="card-body2" name="descricao_produto" rows="6" cols="50" disabled>
    {{ $produto->PRODUTO_DESC }}
    </textarea>

    <h2>Quem viu também gostou</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($produtosRelacionados as $produtoRelacionado)
    <div class="col">
        <div class="cardd">
            @if($produtoRelacionado->Imagem->isNotEmpty())
            <a href="{{ route('produto.show', $produtoRelacionado->PRODUTO_ID) }}"><img src="{{ $produtoRelacionado->Imagem->first()->IMAGEM_URL }}" class="img-top" alt="Imagem do Produto"></a>
            @else
            <a href="{{ route('produto.show', $produtoRelacionado->PRODUTO_ID) }}"><img src="..." class="img-top" alt="Imagem Padrão"></a>
            @endif
            <div class="card-body">
                <h5 class="card-titlee"><a href="{{ route('produto.show', $produtoRelacionado->PRODUTO_ID) }}">{{ $produtoRelacionado->PRODUTO_NOME }}</a></h5>
                <h6 class="card-precoo">R$ {{ $produtoRelacionado->PRODUTO_PRECO }}</h6>
                <p class="card-textt">à vista</p>
                <a href="{{ route('produto.show', $produtoRelacionado->PRODUTO_ID) }}"><button class="btn btn-primary custom-btn" type="button">Adicionar</button></a>
            </div>
        </div>
    </div>
    @endforeach
</div>

    <!-- Footer -->
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
        // Função para adicionar quantidade
        function adicionar() {
            var quantidadeElement = document.getElementById('quantidade');
            var estoqueElement = document.getElementById('estoque');

            var quantidade = parseInt(quantidadeElement.textContent);
            var estoque = parseInt(estoqueElement.textContent);

            if (quantidade < estoque) {
                quantidade++;
                quantidadeElement.textContent = quantidade;
            } else {
                alert('Estoque insuficiente!');

            }
        }

        // Função para remover quantidade
        function remover() {
            var quantidadeElement = document.getElementById('quantidade');

            var quantidade = parseInt(quantidadeElement.textContent);

            if (quantidade > 1) {
                quantidade--;
                quantidadeElement.textContent = quantidade;
            }
        }

        // função para calcular o valor atual - o desconto
        document.addEventListener('DOMContentLoaded', function() {

            var precoOriginal = parseFloat('{{ $produto->PRODUTO_PRECO }}');
            var desconto = parseFloat('{{ $produto->PRODUTO_DESCONTO }}');
            var precoComDesconto = precoOriginal - desconto;

            var precoComDescontoElement = document.getElementById('precoComDesconto');

            precoComDescontoElement.textContent = precoComDesconto.toFixed(2); // Formatar para duas casas decimais
        });

        document.getElementById('form-pesquisa').addEventListener('submit', function(event) {
            event.preventDefault();

            var searchTerm = document.getElementById('search-input').value.trim();

            window.location.href = "{{ route('pesquisar.produto') }}?q=" + encodeURIComponent(searchTerm);
        });
    </script>

</body>

</html>