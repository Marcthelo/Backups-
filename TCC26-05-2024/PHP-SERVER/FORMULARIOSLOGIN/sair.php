<?php
//adm
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header("Location: Login.php")
?>
<?php
//empresa
session_start();
unset($_SESSION['cnpj']);
unset($_SESSION['senha']);
header("Location: Login.php")
?>
<?php
//cliente
session_start();
unset($_SESSION['cpf']);
unset($_SESSION['senha']);
header("Location: Login.php")
?>