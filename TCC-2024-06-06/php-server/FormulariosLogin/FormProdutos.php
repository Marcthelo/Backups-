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
            background-image: url("../../imgs/fundo1png");
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
    <?php 
    if (isset($_POST['submit'])) {
        include_once('config.php');
        $nome_tipo = $_POST['nome_tipo'];
        $desc = $_POST['desc'];
        $fab = $_POST['fab'];
        $peca = $_POST['peca'];
        $volts = $_POST['volts'];

        if ($nome_tipo == "nome_tipo") {
            $nome_tipo = $_POST['nome_tipo'];
            $desc = $_POST['desc'];

            $sql = "INSERT INTO automovel (nome_tipo, descricao)VALUES('$nome_tipo','$desc')";
        } elseif ($fab == "fab") {
            $fab = $_POST['fab'];
            $peca = $_POST['peca'];

            $sql = "INSERT INTO fabricante(tipoFabricante, peca) VALUES('$fab','$peca')";
        } elseif ($volts == "volts") {
            $volts = $_POST['volts'];
            
            $sql = "INSERT INTO volts(quantidade_volts) VALUES('$volts')";
        } else {
            echo "<p class='error'>inválido!</p>";
        }
        
        // Executar a consulta SQL
        if (mysqli_query($conexao, $sql)) {
            echo "<p style='color: green;' class='success'>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p style='color:red;' class='error'>Erro ao cadastrar Produto: " . mysqli_error($conexao) . "</p>";
        }
    }
    ?>

    <fieldset>
        <legend><h2><b>Produtos</b></h2></legend>
        <form method="POST" action="FormProdutos.php">
                <div class="inputBox">
                    <label for="nome_tipo">Produto</label>
                    <select required name="nome_tipo" id="nome_tipo">
                   <option value="">Selecione</option>
                    <option value="Carro">Carro</option>
                    <option value="Trator">Trator</option>
                    <option value="Caminhão">Caminhão</option>
                    <option value="Moto">Moto</option>
                    <option value="Motoneta">Motoneta</option>
                    </select>
                    <br> <br>
                </div>
                <div class="inputBox">
                    <label for="desc">Descrição</label>
                    <input type="text" name="desc" id="desc" class="inputProduto" required />
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="fab">Fabricante</label>
                    <select required name="fab" id="fab">
                        <option value="">Selecione</option>
                        <option value="BOSCH">BOSCH</option>
                        <option value="DELCO_REMY">DELCO REMY</option>
                        <option value="DENSO">DENSO</option>
                        <option value="HITACHI">HITACHI</option>
                        <option value="ISKRA">ISKRA</option>
                        <option value="MAGNETI_MARELI">MAGNETI MARELI</option>
                        <option value="MITSUBISHI">MITSUBISHI</option>
                        <option value="MOTORCRAFT">MOTORCRAFT</option>
                        <option value="PRESTOLITE_LUC">PRESTOLITE/LUC</option>
                        <option value="VALEO">VALEO</option>
                        <option value="WAPSA">WAPSA</option>
                    </select>
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="peca">Peça</label>
                    <select name="peca" id="peca">
                        <option value="">Selecione</option>
                        <option value="INDUZIDO">INDUZIDO</option>
                        <option value="ESTATOR">ESTATOR</option>
                        <option value="ROTOR">ROTOR</option>
                    </select>
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="volts">Voltagem</label>
                    <input type="number" name="volts" id="volts" class="inputProduto" required />
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