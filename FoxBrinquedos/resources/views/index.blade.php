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

        /*    .sessoes {
           background-image: url(fundo.png);
            background-size: 100%;
            opacity: 0.2;
            
        }
*/
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
            height: 300px;
            width: 225px;
            border-radius: 15px;
            background-color: #daf7ff;
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

        .navBar :hover {
            color: #432075;

        }

        .navBar :visited {
            color: #432075;
        }


        .card-img-top {
            width: 200px;
            height: 200px;
            border-radius: 15px;
            margin-left: 10px;
            margin-top: 10px;

        }

        .card-title {
            font-size: 15px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-text {
            font-size: 12px;
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
        }

        .novProd{
            margin: 0px;
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
                    <i type="button"><img class="botoesHeader" src="{{asset('user.png')}}" alt=""></i>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center mb-3 mt-3 navBar">
                <a class="d-flex mr-3" href="">HOME</a>
                <a class="d-flex mr-3" href="{{asset('produto')}}">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>

    <div class="sessoes">
        <section class="d-flex justify-content-center mb-5">
            <img src="{{asset('promocao.png')}}" class="sale mr-5 ">
            <div>
                <div>
                    <img src="{{asset('promocao2.png')}}" class="sale1 mb-2">
                </div>
                <div>
                    <img src="{{asset('promocao3.png')}}" class="sale1">
                </div>
            </div>


        </section>
        <section>
            <div class="d-flex justify-content-center mb-2">
                <h2 class="">Categorias</h2>
            </div>
            <div class="cardsCategorias d-flex justify-content-center mb-2">
                <div class="cardAzul mr-5"><img class="catImg" src="{{asset('legoCat.png')}}" alt=""></div>
                <div class="cardRoxo mr-5"><img class="catImg" src="{{asset('bonecaCat.png')}}" alt=""></div>
                <div class="cardAzul mr-5"><img class="catImg" src="{{asset('bonecosCat.png')}}" alt=""></div>
                <div class="cardRoxo mr-5"><img class="catImg" src="{{asset('ursoCat.png')}}" alt=""></div>
                <div class="cardAzul"><img class="catImg" src="{{asset('carrinhoCat.png')}}" alt=""></div>
            </div>
            <div class="nomeCat d-flex justify-content-center mb-3">
                <a href="" class="">Lego</a>
                <a href="" class="">Bonecas</a>
                <a href="" class="">Bonecos</a>
                <a href="" class="">Ursinhos</a>
                <a href="">Carrinhos</a>
            </div>
        </section>
        <section>
            <div class="d-flex justify-content-center mb-5 mt-5">
                <h2>Novidades</h2>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach($produtos as $produto)
                <div class="d-flex justify-content-center mb-5 rol">
                    <div class="card ml-5 mr-5">
                    @if($produto->Imagem->isNotEmpty())
                        <img src="{{$produto->Imagem->first()->IMAGEM_URL}}" class="card-img-top" alt="">
                        @else
                        <img src="..." class="card-img-top" alt="Imagem Padrão">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{substr($produto->PRODUTO_NOME, 0, 15)}}</h5>
                            <p class="card-text">{{substr($produto->PRODUTO_DESC, 0, 50)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
        </section>
        <section class="d-flex justify-content-center mb-5 desconto">
            <p class="mr-3 mt-5">Descontos</p>
            <p class="mr-3 mt-5">Brindes Surpresas</p>
            <img src="{{asset('logo.png')}}" alt="" class="mr-3 logo1">
            <p class="mr-3 mt-5">Frete Gratis</p>
            <p class="mr-3 mt-5">Rápida Entrega</p>
        </section>
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

</body>

</html>