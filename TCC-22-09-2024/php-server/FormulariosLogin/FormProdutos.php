<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/styleProdutos.css">
    <title>Produtos</title>
</head>
<body>
    <?php 
     
   if (isset($_POST['submit'])) {
         // Incluir arquivo de configuração
         include_once('config.php');

         // Recebe os dados do formulário
         $nome_produto = $_POST['nome_produto'];
         $img_produto = $_POST['img_produto']; // Deve ser uma URL da imagem
         $descricao = $_POST['descricao'];
         $tipo_fabricante = $_POST['tipo_fabricante'];
         $peca = $_POST['peca'];
         $qtd_volts = $_POST['qtd_volts'];
     
         
         // Prepara a inserção no SQL
         $sql = "INSERT INTO produtos (nome_produto, img_produto, descricao, tipo_fabricante, peca, qtd_volts) 
                            VALUES ('$nome_produto','$img_produto','$descricao','$tipo_fabricante','$peca','$qtd_volts')";
// Executa a consulta
if (mysqli_query($conexao, $sql)) {
    echo "<b style='color:green;';>Produto cadastrado com sucesso!<b/>";
} else {
    echo "Erro ao cadastrar produto: " . mysqli_error($conexao);
}
   }


   //REFAZER ESTE ARQUIVO IGUAL AO ARQUIVO FORMULARIOTESTE.HTML
   //EM ARQUIVO SEPARADO
   //LOGIN MAIS DINÂMICO PARA O LOGIN DEFERENCIAR CPF E CNPJ
     ?>
     
    <fieldset>
        <legend><h2><b>Produtos</b></h2></legend>
        <form method="POST" action="PHP/processa_Produtos.php" enctype="multipart/form-data">
                <div class="inputBox">
                    <label for="nome_produto">Produto</label>
                    <select required name="nome_produto" id="nome_produto"> <!--required-->
                   <option value="">Selecione</option>
                    <option value="CARRO">Carro</option>
                    <option value="TRATOR">Trator</option>
                    <option value="CAMINHÃO">Caminhão</option>
                    <option value="MOTO">Moto</option>
                    <option value="MOTONETA">Motoneta</option>
                    </select>
                    <br> <br>
                </div>
                <div class="inputBox">
                <label for="img_produto">Image URL:</label>
                <input type="text" id="img_produto" name="img_produto" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="descricao">Descrição</label>
                    <input required type="text" name="descricao" id="descricao" class="inputProduto"  />
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="tipo_fabricante">Fabricante</label>
                    <input required type="text" name="tipo_fabricante" id="tipo_fabricante" class="inputProduto"  />
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="peca">Peça</label>
                    <input required type="text" name="peca" id="peca" class="inputProduto"  />
                </div>
                <br> <br>
                <div class="inputBox">
                    <label for="qtd_volts">Voltagem</label>
                    <input required type="number" name="qtd_volts" id="qtd_volts" class="inputProduto" />
                </div>
                <br> <br>
                <div id="btn">
                <input id="button" name="submit" type="submit" value="Cadastrar">
                <br><br>
                <input id="button" type="reset" value="apagar">
               <br><br>
                <button id="button"><a href="../SessãoLogin/Registros.php">Voltar</a></button>
                </div>
        </form>
    </fieldset>
</body>
</html>