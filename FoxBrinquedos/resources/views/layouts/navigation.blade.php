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

        h2 {
            color: #432075;
            text-align: center;
            font-size: 30px;
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
                            <a href="{{ url('/profile') }}">Meus pedidos</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Sair</a>

                            </form>
                        </div>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>
                <a type="button"><img class="botoesHeader" src="{{asset('cart.png')}}" alt=""></></a>

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


</body>
</html>




