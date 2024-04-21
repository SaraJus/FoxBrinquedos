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

        h3 {
            font-size: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #102B7B;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 85px;
        }

        form {
            position: absolute;
            top: 130px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        
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

        
        .custom-btn {
            width: 100%;
            background-color: #43ADDA;
            border-color: #43ADDA;
            color: #102B7B;
            font-weight: bold;
        }
        .custom-btn:hover {
            background-color: #102B7B; 
        }

        .form-floating{
            width: 100%;
            padding-top: 0px; 
            padding-bottom: 0px;
        }
        .form-control{
            width: 100%;
        
        }

        .form-row {
            display: flex;
            gap: 10px;
        }

        .form-row > div {
            flex: 1;
        }

    </style>

</head>
<body>

    <div class="divPrincipal">
        <img src="{{asset('logo.png')}}" alt="logo" class="img_logo">
        <h3>Cadastro</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-row">
                <div class="form-floating mb-2">
                    <input type="name" class="form-control" id="floatingInput" placeholder="Nome Completo">
                    <label for="floatingInput">Nome completo:</label>
                </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="name" class="form-control" id="floatingInput" placeholder="CPF">
                    <label for="floatingInput">CPF:</label>
                </div>
            
            <div class="form-row">
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email:</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">Senha:</label>
                </div>
            </div>
            <a href=" {{ route('index') }}"><button class="btn btn-primary custom-btn" type="button">Cadastrar</button></a>
        </form>
    </div>
</body>
</html>
