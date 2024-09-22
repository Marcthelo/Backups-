<?php
//adm
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
unset($_SESSION['nome']);
unset($_SESSION['cpf']);
header("Location: Login.php")
?>
<?php
//empresa
session_start();
unset($_SESSION['cnpj']);
unset($_SESSION['senha']);
unsset($_SESSION['nome']);
unset($_SESSION['email']);
header("Location: Login.php")
?>
<?php
//cliente
session_start();
unset($_SESSION['cpf']);
unset($_SESSION['senha']);
unsset($_SESSION['nome']);
unset($_SESSION['email']);
header("Location: Login.php")
?>