<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <style>
                body {
            background-color:#818181;
            background-image: url("../../imgs/fundo1.png");
            background-size: cover;
        }
        .box{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        button{
            border-radius: 9%;
            color: #9F9F9F;
            height: 35px;
            width: 90px;
        }
        a{
            text-decoration: none;
            color: #ff0000;
            border-radius: 15px;
        }
        h1{
            color: red;
        }
        .box1{
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Cadastro De Usuarios</h1>
        <button type="button"><a href="Login.php">Login</a></button>
        <button type="button"><a href="Formulario.php">Cadastre-se</a></button>
    </div>
    <div class="box1">
        <h1>Cadastro De Produtos</h1>
    <button type="button"><a href="FormProdutos.php">Cadastre-se</a></button>
    </div>
</body>
</html>