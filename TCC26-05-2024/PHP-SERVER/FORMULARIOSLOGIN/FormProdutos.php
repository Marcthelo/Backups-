<!DOCTYPE html>
<html lang="pt-br">
<head>
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

        fieldset {
            background-color: #B40000;
            border: solid #FF0000;
            border-radius: 9%;
            border-width: 20px;
            width: 15%;
            height: 60%;
            align-items: center;
            margin-left: 40%;
           margin: auto;
        }
 
        .inputBox {
            display: inline;
        }

        input {
            background-color: #FFFFFF;
            border-radius: 9%;
            margin-left: 2%;
            border-color: #FFFFFF;
            margin-left: 18%;
           
        }

        label {
            color: #f0f0f0;
            text-decoration: bold;
            margin: auto;
        
            margin-top: 0%;
            border-radius: 30%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        button {
            color: #ff0000;
            border-radius: 9%;
            margin-left: 20%
            
        }
 
        legend {
            margin-top: 10%;
            color: #ffffff;
            border-radius: 30%;
            margin-left: 20%
        }
        #botoes {
            display: flex;
        }

        p {
            color: #9F9F9F;
            border-radius: 30%;
            font-size: 30%;
            margin-left: 2%
        }
        #button {
            color: #ff0000;
            border-radius: 9%;
            margin-left: 20%
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <title>Produto</title>
</head>
<body>
    <fieldset>
        <legend><h2><b>Produtos</b></h2></legend>
        <form method="POST" action="FormProdutos.php">
                <div class="inputBox">
                    <input type="radio" name="automoveis" id="carro" value="carro" required>
                    <label for="carro">Carro</label>
                    <br> 
                    <input type="radio" name="automoveis" id="trator" value="trator" required>
                    <label for="trator">Trator</label>
                    <br> 
                    <input type="radio" name="automoveis" id="caminhao" value="caminhao" required>
                    <label for="caminhao">Caminhão</label>
                    <br> 
                    <input type="radio" name="automoveis" id="moto" value="moto" required>
                    <label for="moto">Moto</label>
                    <br> 
                    <input type="radio" name="automoveis" id="motoneta" value="motoneta" required>
                    <label for="motoneta">Motoneta</label>
                    <br> <br>
                </div>
                <div class="inputBox">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="inputProduto" requireda />
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="class">Classificação</label>
                    <input type="text" name="class" id="class" class="inputProduto" required />
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="peca">Peça</label>
                    <input type="text" name="peca" id="peca" class="inputProduto" required />
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="volts">Voltagem</label>
                    <input type="text" name="volts" id="volts" class="inputProduto" required />
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="fab">Fabricante</label>
                    <input type="text" name="fab" id="fab" class="inputProduto" required />
                </div>
                <br> <br>
                <div id="btn">
                <input id="button" name="submit" type="submit" value="Cadastrar">
               <br><br>
                <button id="button"><a href="../Paginas/IndexPrincipal.php">Voltar</a></button>
                </div>
        </form>
    </fieldset>
</body>
</html>