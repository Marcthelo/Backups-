<?php
session_start();
// Conexão com o banco de dados (ajuste para sua configuração)
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

if (isset($_POST['submit']) && !empty($_POST['Tdocumento']) && !empty($_POST['documento']) && !empty($_POST['senha'])) {

    $Tdocumento = $_POST['Tdocumento'];
    $documento = $_POST['documento'];
    $senha = $_POST['senha'];

    $sql = "SELECT tipo_documento,documento,senha from usuarios where tipo_documento = '$Tdocumento' and documento = '$documento' and senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['tipo_documento']->$Tdocumento);
        unset($_SESSION['documento']->$documento);
        unset($_SESSION['senha']->$senha);
        header('Location: ../Login.html');
    } else {
        $_SESSION['tipo_documento'] = $Tdocumento;
        $_SESSION['documento'] = $documento;
        $_SESSION['senha'] = $senha;
        header('Location: ../../SessãoLogin(2)/home.php');
    }
} elseif (isset($_POST['submit']) && !empty($_POST['Tdocumento']) && !empty($_POST['documento']) && !empty($_POST['senha'])) {
#if -> adm
#elseif -> usuario
    $Tdocumento = $_POST['Tdocumento'];
    $documento = $_POST['documento'];
    $senha = $_POST['senha'];

    $sql = "SELECT tipo_documento,documento,senha FROM administradores where tipo_documento = '$Tdocumento' and documento = '$documento' and senha = '$senha'";

        $result = $conexao->query($sql);
        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['tipo_documento']->$Tdocumento);
            unset($_SESSION['documento']->$documento);
            unset($_SESSION['senha']->$senha);
            header('Location: ../Login.html');
        } else {
            $_SESSION['tipo_documento'] = $Tdocumento;
            $_SESSION['documento'] = $documento;
            $_SESSION['senha'] = $senha;
            header('Location: ../../SessãoLogin(2)/Registros.php');
        }
}