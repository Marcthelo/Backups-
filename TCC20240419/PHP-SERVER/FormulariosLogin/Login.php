<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <style>
        a{
            text-decoration: none;
            color: rgb(255, 0, 0);
        }

        body {
            background-color:#818181;
            background-image: url("../../imgs/fundo1.png");
            background-size: cover;
        }
        #fieldset{
            background-color: #B40000;
            border: solid #FF0000;
            border-radius: 9%;
            border-width: 20px;
            width: 20%;
            align-items: center;
            margin-left: 40%;
            margin-top: 15%;
        }
 
        input {
            background-color: #FFFFFF;
            border-radius: 9%;
            border-color: #FFFFFF;
            margin-left: 18%
        }
        h2 {
            color: #ffffff;
            text-decoration: bold;
            margin-top: 0%;
            border-radius: 30%;
            margin-left: 35%
        }

        button {
            color: #ff0000;
            border-radius: 9%;
            margin-left: 20%
            
        }
 
        p {
            color: #9F9F9F;
            border-radius: 30%;
            margin-left: 20%
        }
        #botoes {
            display: flex;
        }
    </style>
    <title> Login </title>
</head>
<body>
    <div id="fieldset">
        <legend> <h2> LOGIN </h2></legend>
             <input type="text" name="CPF" id="CPF" placeholder="CPF ou CNPJ" required/>
        <br> <br>
            <input type="password" name="senha" id="senha" placeholder="Senha" required/>
        <br> <br>
            <p> Não possui um <a href="../FormulariosLogin/FormularioCliente.html">cadastro</a>?</p>
        <div id="botoes">
            <button type="submit">Entrar</button>
            <button type="submit"> <a href="../Paginas/index-Principal.html">Voltar</a></button>
    </div>
    </fieldset>
</body>
</html>