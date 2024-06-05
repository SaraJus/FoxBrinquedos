<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        html {
            margin: 0%;
            padding: 0%;
        }

        body {
            margin: 0%;
            padding: 0%;
        }

        hr {
            border-color: #432075;
        }

        h2 {
            color: #432075;
            text-align: center;
            font-size: 50px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .line {
            background-color: #43adda;
            width: 100%;
            height: 35px;
        }

        .logo {
            height: 75px;
            width: 75px;
        }

        .logo1 {
            width: 150px;
        }

        .sale {
            background-color: #6ad7f4;
            width: 650px;
            height: 400px;
            border-radius: 15px;
        }

        .sale1 {
            background-color: #102b7b;
            width: 300px;
            height: 196px;
            border-radius: 15px;
        }

        .card {
            background-color: white;
            text-align: center;
            margin: 10px;
        }

        .botoesHeader {
            width: 50px;
        }

        .cardAzul {
            background-color: #Daf7ff;
            width: 130px;
            height: 130px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }

        .cardRoxo {
            background-color: #ead3ff;
            width: 130px;
            height: 130px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }

        .catImg {
            width: 130px;
        }

        .nomeCat {
            margin-left: 35px;
            gap: 120px;
        }

        .nomeCat :hover {

            text-decoration-line: none;

        }

        .nomeCat :visited {
            color: #432075;
        }

        .desconto {
            font-size: 25px;
            color: #102b7b;
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
            text-decoration-line: none;
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

        .link {
            margin: 20px;
            left: 400px;

        }

        .card-text {
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
        }

        .novProd {
            margin: 0px;
        }

        .btn-finish {
            background-color: #432075;
            border-color: #432075;
            color: white;
            font-weight: bold;
            position: relative;
            width: 100%;
        }

        .btn-finish:hover {
            background-color: #102B7B;
            top: -2px;
            border-bottom: 2px solid #102B7B;
        }
    </style>
</head>

<body>

    <header class="mb-5">
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
                        Dashboard
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
                <a class="d-flex mr-3" href="{{route('index')}}">HOME</a>
                <a class="d-flex mr-3" href="{{route('produto.index')}}">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>

    <section class="d-flex justify-content-center align-items-center" style="height: 464px;">
        <div class="d-flex mt-5 mb-5 align-items-center">
            <div class="d-grid mr-5">
                <h2> Contate-nos</h2>
                <h4 class="mt-2">Nosso endereço</h4>
                <div class="mt-4">
                    <p>175, Lugar Algum Street</p>
                    <p>São Paulo, Sp</p>
                    <p>Telefone: 99 99999 9999</p>
                </div>
            </div>
            <div class="ml-5" style="width: 800px">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-finish d-flex justify-content-center align-items-center mt-5" type="submit" hr>
                    <h3>Enviar Formulario</h3>
                </button>
            </div>
        </div>
    </section>

    <footer class="mt-5">
        <div class="d-flex">
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
        </div>
    </footer>

</body>

</html>