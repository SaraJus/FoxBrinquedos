<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brinquedo</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
            margin: 0;
            height: 100vh;
            width: 100%;

        }
        
        .line{
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
        hr{
            border-color: #102B7B;
        }
        .navBar {
            font-size: 20px;
            gap: 40px;
            color: #102B7B;
        } 
        .navBar :hover{
            color:#43ADDA;
        }

        .navBar:visited{
            color: #102B7B;
        }
        .img_produto{
            width: 280px;
            height: 350px;
            background-color: bisque;
            border-radius: 10px;
            margin-left: 340px;
            text-align:  center;
        }
        h2{
            text-align: center;
            color: #102B7B;
        }
    .info_produto{
        display: flex;
        flex-direction: column;
        float: right;
        margin-right: 350px;
        margin-top: -300px;
    }
    .pagamentos{
        display: flex;
        gap: 10px;
        margin-left: 715px;
        margin-top: -100px;
    }

    .circulo{
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
    .oval{
        width: 60px;
        height: 30px;
        border-radius: 200px;
        background-color: bisque;
        color: black;
        display: flex;

        text-align: center;
        justify-content: center;
        cursor: pointer;
    }
    .adicionar{
        background-color: orange;
        width: 200px;
        height: 40px;
        border-radius: 10px;
        text-align: left;
        margin-left: 200px;
    }
    .descricao{
        width: 650px;
        height: 200px;
        background-color: bisque;
        display: flex;
        
        margin-top: 100px;
        margin-left: 330px;
        border-radius: 10px;
    }
    .card_produto{
        margin-left: 300px;
        border: none;
        height: 400px;
        width: 1000px;
        margin-top: 30px;
    
    }
    .card_produto img{
        width: 300px;
        padding-bottom: 20px;
    }

    .btn_adicionar{
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .card-body2{
        width: 1000px;
        height: 200px;
        background-color: bisque;
        margin-left: -17px;
        border-radius: 5px;
        gap: 30px;
        margin-top: 20px;
    }
    

    
    </style>
</head>
<body>


<header>
        <nav class="">
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
    
    <h2>PRODUTO</h2>
    <div class="card_produto">
    <div class="card mb-2" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://cdn.awsli.com.br/600x450/2437/2437567/produto/180351318/da5927af89.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-title">Pelúcia Básica - 23Cm - Disney - Frozen 2 - Salamandra Bruni - Fun</p>
        <p class="card-text"><small class="text-body-secondary">Preço: </small></p>
        <p class="card-text"><small class="text-body-secondary">Desconto: </small></p>

        <div class="btn_adicionar">
            <button class="circulo">+</button>
            <div class="oval">1</div>
            <button class="circulo">-</button>
        </div>

      </div>

  </div>
  
  </div>
</div>

<div class="col-md-8">
      <div class="card-body2">
        <p class="card-title">Descricap</p>
      </div>

  </div>
</body>
</html>