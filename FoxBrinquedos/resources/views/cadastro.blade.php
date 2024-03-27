<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
        body{
            background-image:url('fundo.png');
            
        }
        .divPrincipal {
            background-color: #DAF7FF;
            width: 600px;
            height: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: start;
        }

        .img_logo {
            width: 100px;
            height: 100px;
        }

        h4 {
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
            color: #432075;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 95px;
        }

        form {
            text-align: left;
            position: absolute;
            top: 130px;
        }
        
        form input[type="text"],
        form input[type="password"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            background-color: #ffffff; 
            font-family: 'Times New Roman', Times, serif;
        }
        
        .custom-btn {
            width: 100%;
            background-color: #F39337;
            border-color: #F39337;
            color: #432075;
            font-weight: bold;
        }
        .custom-btn:hover {
            background-color: #102B7B; 
        }

        

    </style>

</head>
<body>

    <div class="divPrincipal">
        <img src="{{asset('logo2.png')}}" alt="logo" class="img_logo">
        <h4>Cadastro</h4>
        <form action="">
            <input class="form-control" type="text" placeholder="Nome completo:" aria-label="default input example">
            <input class="form-control" type="text" placeholder="CPF:" aria-label="default input example">
            <input class="form-control" type="text" placeholder="Email:" aria-label="default input example">
            <input type="password" placeholder="Senha:" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            <a href="#"><button class="btn btn-primary custom-btn" type="button">Cadastrar</button></a>
        </form>
    </div>
</body>
</html>