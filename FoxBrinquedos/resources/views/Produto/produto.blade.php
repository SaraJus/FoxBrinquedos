<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

        .line {
            background-color: #43ADDA;
            height: 35px;
        }

        .logo {
            height: 75px;
            width: 75px;
        }

        .logo1 {
            width: 150px;
        }

        .card {
            height: auto;
            width: 175px;
            border-radius: 15px;
            background-color: #444;
        }

        .botoesHeader {
            width: 50px;
        }

        footer {
            background-color: #43adda;
            height: 200px;
            border-top-right-radius: 35px;
            border-top-left-radius: 35px;
        }

        .imgFooter {
            width: 200px;
            height: 200px;
            position: relative;
        }

        .redesSociais {
            position: relative;
            height: 150px;
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



        .card-img-top {
            width: 150px;
            height: 150px;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-left: 10px;
            margin-top: 5px;
        }

        .card-title {
            font-size: 12px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            padding: 2px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
        }

        .card-text {
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            padding-left: 5px;
            margin-top: 2px;

        }

        .card {
            background-color: white;
            text-align: center;
            margin: 10px;
        }

        .card-preco {
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

        .pagination {
            justify-content: center;
        }

        .link {
            margin: 20px;
            left: 400px;

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
    <h2>Brinquedos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
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
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{$produtos->onEachSide(0)->links()}}
    </div>
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
        var totalPreco = 0;

        function adicionarProduto(produtoNome, produtoPreco) {
            var lista = document.querySelector('.dropdown-list');
            var novoItem = document.createElement('li');
            novoItem.textContent = produtoNome + ' - R$ ' + produtoPreco.toFixed(2);
            lista.insertBefore(novoItem, lista.firstChild);

            totalPreco += produtoPreco;
            document.querySelector('.dropdown-total').textContent = 'Total: R$ ' + totalPreco.toFixed(2);
        }

        document.querySelectorAll('.custom-btn').forEach(function(botao) {
            botao.addEventListener('click', function(event) {
                var produtoNome = event.target.closest('.card').querySelector('.card-title').textContent.trim();
                var produtoPreco = parseFloat(event.target.closest('.card').querySelector('.card-preco').textContent.trim().replace('R$', ''));
                adicionarProduto(produtoNome, produtoPreco);
            });
        });
        document.getElementById('finalizar-compras').addEventListener('click', function() {
            window.location.href = "{{ route('carrinho.index') }}";
        });
    </script>
    <script>
        document.getElementById('form-pesquisa').addEventListener('submit', function(event) {
            event.preventDefault();

            var searchTerm = document.getElementById('search-input').value.trim();

            window.location.href = "{{ route('pesquisar.produto') }}?q=" + encodeURIComponent(searchTerm);
        });
    </script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJq6AKhWnXjqjsz+z3pMVm7m1oLD8x4m8VZXJfF0f5X40a6Uj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>