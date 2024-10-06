<?php 
session_start();
include_once('config.php');
//CLIENTE
if (isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']) && !empty($_POST['nome'])) {
//Acessa
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome']; //fazer o msm com a empresa soque com razao_social no caso nome 
   
    $sql = "SELECT * From cliente where cpf = '$cpf' and senha = '$senha' and nome = '$nome'";
    $result = $conexao->query($sql);
    if (mysqli_num_rows($result) < 1) {
        //sessao cliente
        //Não Acessa caso nao exista ou nao cadastrado
        unset($_SESSION['cpf'] -> $cpf);
        unset($_SESSION['senha'] -> $senha);
        unset($_SESSION['nome'] -> $nome);
        header('Location: Login.php');
    } else {
        //Acessa 
        $_SESSION['cpf'] = $cpf;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        header('Location: ../SessãoLogin(2)/home.php');
        //../SessãoLogin/
    }
    
} 
//EMPRESA
elseif (isset($_POST['submit']) && !empty($_POST['cnpj']) && !empty($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['nome'])) {
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];

    $sql = "SELECT * FROM empresa where cnpj = '$cnpj' and senha = '$senha' and email = '$email' and razao_social = '$nome'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        //Sessao empresa
        //Não Acessa caso nao exista ou nao cadastrado
        unset($_SESSION['cnpj']  -> $cnpj);
        unset($_SESSION['senha'] -> $senha);
        unset($_SESSION['email'] -> $email);
        unset($_SESSION['nome'] -> $nome);
        header('Location: Login.php');
    } else { 
        //Acessa 
        $_SESSION['cnpj'] = $cnpj;
        $_SESSION['senha'] = $senha;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        header('Location: ../SessãoLogin(2)/home.php');
        
    }
    
}

 //ADM
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['cpf'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $sql = "SELECT * FROM adm where email = '$email' and senha = '$senha' and nome = '$nome' and cpf = '$cpf'";
    $result = $conexao->query($sql);
    if (mysqli_num_rows($result)< 1) {
        //Não Acessa caso nao exista ou nao cadastrado
        unset($_SESSION['email'] -> $email);
        unset($_SESSION['senha'] -> $senha);
        unset($_SESSION['nome'] -> $nome);
        unset($_SESSION['cpf'] -> $cpf);
        header('Location: Login.php');
    } else {
        //Acessa 
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        $_SESSION['cpf'] = $cpf;
        header('Location: ../SessãoLogin(2)/Registros.php');
    }
}
#else { //nao acessa
 # header('Location: Login.php');
#}
