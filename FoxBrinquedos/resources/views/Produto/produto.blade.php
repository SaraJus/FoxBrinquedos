<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
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

        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
            text-align: center;
        }

        .navBar a:hover {
            color: #43ADDA;
        }

        .navBar a:visited {
            color: #102B7B;
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
        .link{
            margin: 20px;
            left: 400px;

        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="line"></div>
            <div class="navbar navbar-light">
                <form class="form-inline nav-search">
                    <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
                    <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Search" style=" width:326px; ">
                    <i class="btn btn-custom fa fa-search" type="submit"></i>
                </form>
                <div>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="link">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="link">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="link">
                        Register
                    </a>
                    @endif
                    @endauth
                </div>
                <div class="dropdown">
                    <i class="btn dropdown-toggle" type="button" id="cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="botoesHeader" src="{{asset('cart.png')}}" alt="Cart">
                    </i>
                    <div class="dropdown-menu dropdown-menu-right p-3" aria-labelledby="cartDropdown" style="width: 300px;">
                        <ul class="list-unstyled dropdown-list">
                            <li class="dropdown-total">Total: R$ 0,00</li>
                        </ul>
                        <button class="btn btn-primary w-100 mt-3" id="finalizar-compras">Finalizar Compras</button>
                    </div>
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
    <h2>Brinquedos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($produtos as $produto)
        <div class="col">
            <div class="card">
                @if($produto->Imagem->isNotEmpty())
                <a href="{{route('produto.show',$produto-> PRODUTO_ID)}}"><img src="{{$produto->Imagem->first()->IMAGEM_URL}}" class="card-img-top" alt="..."></a>
                @else
                <a href="{{route('produto.show',$produto-> PRODUTO_ID)}}"><img src="..." class="card-img-top" alt="Imagem Padrão"></a>
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{route('produto.show',$produto-> PRODUTO_ID)}}">{{($produto->PRODUTO_NOME)}}</a></h5>
                    <h6 class="card-preco">R${{($produto->PRODUTO_PRECO)}}
                        <p class="card-text">à vista</p>
                    </h6>
                    <button class="btn btn-primary custom-btn" type="button">Adicionar</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{$produtos ->onEachSide(0)->links()}}
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJq6AKhWnXjqjsz+z3pMVm7m1oLD8x4m8VZXJfF0f5X40a6Uj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
