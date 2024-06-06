<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brinquedo</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

        h2 {
            color: #432075;
            text-align: center;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            margin-top: 20px;
        }

        .line {
            background-color: #43ADDA;
            width: 100%;
            height: 35px;
        }

        hr {
            border-color: #102B7B;
        }

        .logo {
            height: 75px;
            width: 75px;
        }

        .botoesHeader {
            width: 50px;
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

        

        .info_produto {
            display: flex;
            flex-direction: column;
            float: right;
            margin-right: 350px;
            margin-top: -300px;
        }

        .pagamentos {
            display: flex;
            gap: 10px;
            margin-left: 715px;
            margin-top: -100px;
        }

        .adicionar {
            background-color: orange;
            width: 200px;
            height: 40px;
            border-radius: 10px;
            text-align: left;
            margin-left: 200px;
        }

        .descricao {
            width: 650px;
            height: 200px;
            background-color: bisque;
            display: flex;
            margin-top: 100px;
            margin-left: 330px;
            border-radius: 10px;
        }

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

        .card_produto img {
            width: 300px;
            padding-bottom: 20px;
        }

        .btn_adicionar {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

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

        footer {
            background-color: #43adda;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
            margin-top: 30px;
        }

        .imgFooter {
            width: 200px;
            height: 200px;
            position: relative;
        }

        .redesImg {
            width: 50px;
            height: 50px;
        }

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
            object-fit: fill;
        }

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

        .btn-custom {
            background-color: #432075;
            color: white;
        }

        .btn-custom:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.5));
        }

        .carousel-control-prev-icon {
            background-color: black;
        }

        .carousel-control-next-icon {
            background-color: black;
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
            padding: 12px 16px;
            color: #102B7B ;
            font-weight: bold;
            transition: color 0.3s ease;
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

    </style>
</head>
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

    <h2>PRODUTO</h2>

    <!-- Card do Produto -->
    <div class="card mb-2">
        <div class="card_produto">
            <div class="row g-0">
                <div class="col-md-4">

                    <!-- Imagem do Produto -->
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">

                        <!-- foreach que puxa as imagens do banco -->
                        <!-- Imagem do Produto -->
                        <div class="carousel-inner">
                            @foreach($produto->Imagem as $key => $img)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ $img->IMAGEM_URL }}" class="d-block w-100" alt="Imagem {{ $key }}">
                            </div>
                            @endforeach
                        </div>

                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <!-- Informações do Produto -->
                        <p class="card-title">{{ $produto->PRODUTO_NOME }}</p>
                        <p><s>De: R$ <span id="precoOriginal">{{ $produto->PRODUTO_PRECO }}</span></s></p>
                        <p>Por: R$ <span id="precoComDesconto"></span></p>

                        <!-- Estoque -->
                        <p class="card-text">Estoque: <small id="estoque">{{ $produto->Estoque->PRODUTO_QTD }}</small></p>

                        <!-- Botões de Adicionar/Remover do estoque -->
                        <button class="btn" onclick="adicionar()">+</button>
                        <span id="quantidade">1</span>
                        <button class="btn" onclick="remover()">-</button>
                    </div>

                    <div>
                        <button type="button" class="btn btn-custom" style="margin-left: 20px;">Adicionar</button>
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
                    <h5 class="card-titlee"><a href="{{ route('produto.show', $produtoRelacionado->PRODUTO_ID) }}">{{ $produtoRelacionado->PRODUTO_NOME }}</a>
                    </h5>
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