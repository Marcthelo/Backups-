<?php 
session_start();
include_once('config.php');
//CLIENTE
if (isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])) {
//Acessa
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
   
    $sql = "SELECT * From cliente where cpf = '$cpf' and senha = '$senha'";
    $result = $conexao->query($sql);
    if (mysqli_num_rows($result) < 1) {
        //sessao cliente
        header('Location: Login.php');
    } else {
        header('Location: ../Paginas/IndexPrincipal.php');
    }
    
} 
//EMPRESA
elseif (isset($_POST['submit']) && !empty($_POST['cnpj']) && !empty($_POST['senha'])) {
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM empresa where cnpj = '$cnpj' and senha = '$senha'";
    $result = $conexao->query($sql);
    if (mysqli_num_rows($result) < 1) {
        //Sessao empresa
        unset($_SESSION['cnpj']);
        unset($_SESSION['senha']);
        header('Location: Login.php');
    } else {
        $_SESSION['cnpj'];
        $_SESSION['senha'];
        header('Location: ../Paginas/EmpresaPrincipal.php');
    }
    
}
 //ADM
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM adm where email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);
    if (mysqli_num_rows($result)< 1) {
        unset($_SESSION['email'] -> $email);
        unset($_SESSION['senha'] -> $senha);
        header('Location: Login.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../Paginas/Registros.php');
    }
}
#else { //nao acessa
 #   header('Location: Login.php');
#}
?>