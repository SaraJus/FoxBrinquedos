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

    body, html {
        margin: 0;
        padding: 0;
        overflow-x: hidden; 
    }

        hr{
            border-color: #102B7B;
        }
        h2{
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
        .navBar a:hover{
            color:#43ADDA;
        }

        .navBar a:visited{
            color: #102B7B;
        }

        .card-img-top{
            width: 150px;
            height: 150px;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-left: 10px;
            margin-top: 5px;
        }
        .card-title{
        font-size: 12px; 
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        padding: 2px;
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        max-width: 150px; 
        }
        .card-text{
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            padding-left: 5px;
            margin-top: 2px;

        }

        .card{
            background-color: white;
            text-align: center;
            margin: 10px;
        }
        .card-preco{
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
            top:-2px;
            border-bottom:2px solid #102B7B;
        }
        .pagination {
            justify-content: center;
        }
        

    </style>
</head>

<body>
    <header>
        <nav>
            <div class="line"></div>
            <div class="navbar navbar-light">
                <form class="form-inline nav-search" >
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
                <a class="d-flex mr-3" href="">BRINQUEDOS</a>
                <a class="d-flex mr-3" href="">CATEGORIA</a>
                <a class="d-flex mr-3" href="">CONTATO</a>
            </div>
            <hr>
        </nav>
    </header>

    @section('content')
<div class="container">
    <h2>{{ $produto->PRODUTO_NOME }}</h2>
    @if($produto->imagens->isNotEmpty())
    <img src="{{ $produto->imagens->first()->IMAGEM_URL }}" class="img-fluid" alt="{{ $produto->PRODUTO_NOME }}">
    @else
    <img src="..." class="img-fluid" alt="Imagem Padrão">
    @endif
    <p>{{ $produto->PRODUTO_DESC }}</p>
    <p>R$ {{ $produto->PRODUTO_PRECO }}</p>
    <a href="{{ route('carrinho.adicionar', $produto->PRODUTO_ID) }}" class="btn btn-success">Adicionar ao Carrinho</a>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pedido #{{ $pedido->PEDIDO_ID }}</h2>
    <p>Data: {{ $pedido->PEDIDO_DATA }}</p>
    <p>Status: {{ $pedido->status->STATUS_DESC }}</p>
    <h3>Itens do Pedido</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedido->itens as $item)
            <tr>
                <td>{{ $item->produto->PRODUTO_NOME }}</td>
                <td>{{ $item->ITEM_QTD }}</td>
                <td>R$ {{ $item->ITEM_PRECO }}</td>
                <td>R$ {{ $item->ITEM_QTD * $item->ITEM_PRECO }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


    
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
