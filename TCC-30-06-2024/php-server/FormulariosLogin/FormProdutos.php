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
    <?php 
     //C:\\xampp\\htdocs\\TCC-29-06-2024\\banco\\Banco_imgs\\

     //$_FILES é uma variável global superglobal no PHP que contém informações sobre arquivos enviados por meio do método HTTP POST. Quando um formulário HTML com campos de upload de arquivos é submetido, os dados dos arquivos enviados ficam disponíveis na variável $_FILES.

     // Incluir arquivo de configuração
     include_once('config.php');
     
     // Verificar se o formulário foi enviado e se a imagem foi selecionada
     if (isset($_POST['submit']) && isset($_FILES['img_produto'])) {
         // Receber dados do formulário
         $nome_produto = filter_input(INPUT_POST, 'nome_produto', FILTER_UNSAFE_RAW);
         $descricao = filter_input(INPUT_POST, 'descricao', FILTER_UNSAFE_RAW);
         $peca = filter_input(INPUT_POST, 'peca', FILTER_UNSAFE_RAW);
         $tipo_fabricante = filter_input(INPUT_POST, 'tipo_fabricante', FILTER_UNSAFE_RAW);
         $qtd_volts = filter_input(INPUT_POST, 'qtd_volts', FILTER_SANITIZE_NUMBER_INT);
     
         // Tratar upload da imagem
         $imagem = $_FILES['img_produto'];
         if ($imagem['error'] == 0) {
             $nome_imagem = $imagem['name'];
             $tamanho_imagem = $imagem['size'];
             $tipo_imagem = $imagem['type'];
             $tmp_name_imagem = $imagem['tmp_name'];
     
             // Validar tamanho da imagem (1MB)
             if ($tamanho_imagem <= 1024000) {
                 // Validar tipo de imagem (PNG, JPEG, JPG)
                 if (in_array($tipo_imagem, ["image/png", "image/jpeg", "image/jpg"])) {
                     // Gerar nome único para a imagem
                     $nome_unico = uniqid() . "EXTENSION." . $nome_imagem;
                 $caminho_imagem = "C:\\xampp\\htdocs\\TCC-29-06-2024\\banco\\Banco_imgs\\" . $nome_unico;
     
                     // Mover imagem para o diretório
                     if (move_uploaded_file($tmp_name_imagem, $caminho_imagem)) {
                         // Salvar dados no banco de dados
                         $sql = "INSERT INTO produtos (nome_produto, img_produto, descricao, tipo_fabricante, peca, qtd_volts) 
                            VALUES ('$nome_produto','$caminho_imagem','$descricao','$tipo_fabricante','$peca','$qtd_volts')";
     
                         if (mysqli_query($conexao, $sql)) {
                            
                        // echo "<h2 style='color: green;' class='success'>Dados enviados com sucesso!</h2>";
                         } else {
                             echo "<h2 style='color: red;' class='error>'Falha ao salvar os dados: " . mysqli_error($conexao) . "</h2>";
                         }
                     } else {
                         echo "Falha ao mover o arquivo de imagem.";
                     }
                 } else {
                     echo "Tipo de imagem inválido. Apenas PNG, JPEG e JPG são permitidos.";
                 }
             } else {
                 echo "Tamanho da imagem excede o limite de 1 MB.";
             }
         } else {
             echo "Erro no upload da imagem: " . $imagem['error'];
         }
     } else {
         //echo "Selecione uma imagem para enviar.";
     }
     
     ?>
     
    <fieldset>
        <legend><h2><b>Produtos</b></h2></legend>
        <form method="POST" action="FormProdutos.php" enctype="multipart/form-data">
                <div class="inputBox">
                    <label for="nome_produto ">Produto</label>
                    <select required name="nome_produto " id="nome_produto">
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
                    <label for="img_produto">Imagem do Produto</label>
                    <input type="file" name="img_produto" id="img_produto" formenctype="multipart/form-data" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="inputProduto" required />
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="tipo_fabricante">Fabricante</label>
                    <select required name="tipo_fabricante" id="tipo_fabricante">
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
                    <select name="peca" id="peca" required>
                        <option value="">Selecione</option>
                        <option value="INDUZIDO">INDUZIDO</option>
                        <option value="ESTATOR">ESTATOR</option>
                        <option value="ROTOR">ROTOR</option>
                        <option value="BOBINA">BOBINA</option>
                        <option value="AUTOMÁTICO">AUTOMÁTICO</option>
                        <option value="IMPULSOR">IMPULSOR</option>
                        <option value="CHAVES_DE_SETAS">CHAVES DE SETAS</option>
                    </select>
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="qtd_volts">Voltagem</label>
                    <input type="number" name="qtd_volts" id="qtd_volts" class="inputProduto" required />
                </div>
                <br> <br>
                <div id="btn">
                <input id="button" name="submit" type="submit" value="Cadastrar">
                <input id="button" type="reset" value="apagar">
               <br><br>
                <button id="button"><a href="../Paginas/home.php">Voltar</a></button>
                </div>
        </form>
    </fieldset>
</body>
</html>