<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-image:url('fundo.png');
            
        }
        .form_login{
            display: flex;
            justify-content: center;
            top: 50%;
            left: 50%;
            margin-top:273px;
        }
        .div_principal{
            background-color: #DAF7FF ;
            width: 600px;
            height: 400px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .img_logo{
            margin-top:20px;
            width: 100px;
            
        }
        form input[type="text"],
        form input[type="password"] {
            display: block;
            width: 50%;
            margin-bottom: 5px;
            background-color: #ffffff; 
            font-family: 'Times New Roman', Times, serif;
        }

        
        .btn_cadastrar:link{
            color:#FB9938;
            font-weight: bold;
        }
        .btn_cadastrar:visited{
            color: #432075;
        }

        .custom-btn {
            width: 50%;
            background-color: #F39337;
            border-color: #F39337;
            color: #432075;
            font-weight: bold;
        }
        .custom-btn:hover {
            background-color: #102B7B; 
        }

            h4 {
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
            color: #432075;
            align-items: center;
            justify-content: center;
            margin-top:-20px;

        }


      
    </style>
</head>
<body>
    
    <form action="" method="" class="form_login">
    <div class="div_principal">
   
        
       
       <div class="logo_login">
            <img src="{{asset('logo2.png')}}" alt="logo" class="img_logo">
        </div>
        <h4>Login</h4>
        <input class="form-control" type="text" placeholder="Email:" aria-label="default input example">
        <input type="password" placeholder="Senha:" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">

        <button class="btn btn-primary custom-btn" type="button">Entrar</button>

        <a href="#" class="btn_cadastrar">CADASTRE-SE</a>
    </div>

    </form>
</body>
</html>