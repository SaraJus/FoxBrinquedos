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
            margin-top:180px;
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


        
        .btn_cadastrar:link{
            color:#FB9938;
            font-weight: bold;
        }
        .btn_cadastrar:visited{
            color: #432075;
        }

        .custom-btn {
<<<<<<< HEAD
            width: 400px;
=======
            width: 50%;
>>>>>>> a37b926913bf3220a0fc80a5e0ef27f0ee2cad75
            background-color: #43ADDA;
            border-color: #43ADDA;
            color: #102B7B;
            font-weight: bold;
        }
        .custom-btn:hover {
            background-color: #102B7B;
        }

            h3 {
            font-size: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #102B7B;
            align-items: center;
            justify-content: center;
            margin-top:-20px;

        }
        .form-floating{
            width: 400px;
            padding-top: 0px; 
            padding-bottom: 0px;
        }


      
    </style>
</head>
<body>
    
    <form action="" method="" class="form_login">
    <div class="div_principal">
   
        
       
       <div class="logo_login">
            <img src="{{asset('logo.png')}}" alt="logo" class="img_logo">
        </div>
<<<<<<< HEAD
        <h4>Login</h4>
        <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email:</label>
                </div>
        <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">Senha:</label>
                </div>
=======
        <h3>Login</h3>
        <input class="form-control" type="text" placeholder="Email:" aria-label="default input example">
        <input type="password" placeholder="Senha:" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
>>>>>>> a37b926913bf3220a0fc80a5e0ef27f0ee2cad75

        <button class="btn btn-primary custom-btn" type="button">Entrar</button>

        <a href="cadastro" class="btn_cadastrar">CADASTRE-SE</a>
    </div>

    </form>
</body>
</html>