<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color:#818181;
            background-image: url("../../imgs/fund1.png");
            background-size: cover;
        }
        nav {
        display: flex;
        flex-direction: row;
        background-color: #b20000;
        width: 100%;
        height: 15vh;
        justify-content: space-around;
        gap: 3em;
        align-items: center;
        color: white;
        display: flex;
        justify-content: start;
      }
      h1{
        color: white;
      }
      a{
        text-decoration: none;
        color: red;
      }
      #a{
         border: solid 1px white;
         border-radius: 20pt;
         color: red;
         background-color:white;
        }    
        #a2{
          background-color: white;
        } 
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <title>Registros</title>
</head>
<body>
<?php 
session_start();
if ((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: Login.php');
}
$logado = $_SESSION['email'];
?>
<!-- Cabeçalho -->
<nav style="background-color: #b20000" class="navbar navbar-expand-lg navbar-light bg-light">
  <h2 class="navbar-brand">SISTEMA DE REGISTRO</h2>
    <span class="navbar-toggler-icon"></span>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav"> <!--utilizar esses dois para espaçamento sem quebra de linhas &nbsp; &#160;-->
     <button id="a"><a href="../FormulariosLogin/sair.php">Sair</a></button> &nbsp; &#160; &nbsp; &#160; &nbsp; &#160; &nbsp; &#160;
     <button id="a"><a href="">Produtos</a></button> <br>
     <?php 
      echo "<h1>Bem Vindo(a) <u>$logado</u></h1>";
      ?>
    </div>
  </div>
</nav>
<!-- Seção -->
<div id="Form">
<form action="Formulario.php" method="post">
<input type="text" name="buscar" id="">
<input type="submit" value="Buscar">
</form>
</div>

<div id="Tables">
<table border="1">
<tr>
  <td>IDs</td>
  <td>NOMES</td>
  <td>CPFs</td>
  <td>SENHAS</td>
  <td>EMAILS</td>
  <td>DATA DE NASCIMENTO</td>
  <td>TELEFONES</td>
  <td>OPÇÕES</td>
</tr>
<?PHP
#cnx = conexao
$cnx = mysqli_connect("localhost", "root", "", "rsp_banco");
$sqle = "SELECT idcliente, nome, cpf, senha, email, data_nascimento, telefone FROM cliente ORDER BY idcliente desc";
$rta = mysqli_query($cnx, $sqle);
while ($mostrar = mysqli_fetch_row($rta)) {
  ?>
  <tr>
  <td><?php echo $mostrar['0'] ?></td>
  <td><?php echo $mostrar['1'] ?></td>
  <td><?php echo $mostrar['2'] ?></td>
  <td><?php echo $mostrar['3'] ?></td>
  <td><?php echo $mostrar['4'] ?></td>
  <td><?php echo $mostrar['5'] ?></td>
  <td><?php echo $mostrar['6'] ?></td>
  <!-- manipular registros -->
  <td>
    <a id="a2" href="../FormulariosLogin/edit.php?id=$mostrar[0]">Editar</a>
    <a id="a2" href="">Excluir</a>
  </td>
  </tr>
  <?php
  #url dos arquivos ../FormulariosLogin/
}
?>
</table>
</div>

</body>
</html>