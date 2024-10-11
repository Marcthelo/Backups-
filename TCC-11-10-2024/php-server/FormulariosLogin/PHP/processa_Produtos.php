<?php 
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'rsp_banco';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro";
} else {
     echo "Certo!";
}

  
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
      header("Location: ../FormProdutos.html");
  } else {
      echo "Erro ao cadastrar produto: " . mysqli_error($conexao);
  }
     