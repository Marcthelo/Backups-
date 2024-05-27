<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color:#818181;
            background-image: url("../../imgs/fundo1.png");
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
      button{
        border-radius: 9%;
            color: #9F9F9F;
            height: 35px;
            width: 50px;
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
<nav style="background-color: #b20000" class="navbar navbar-expand-lg navbar-light bg-light">
  <h2 class="navbar-brand">SISTEMA DE REGISTRO</h2>
    <span class="navbar-toggler-icon"></span>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     <button><a class="nav-item nav-link active" href="../FormulariosLogin/sair.php">Sair</a></button>
    </div>
  </div>
</nav>
<?php 
echo "<h1>Bem Vindo(a) <u>$logado</u></h1>";
?>
</body>
</html>