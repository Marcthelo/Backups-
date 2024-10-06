<?php
session_start();
include_once('../config.php');
// Conexão com o banco de dados (ajuste para sua configuração)
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'rsp_banco';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conexao->connect_errno) {
    echo "Erro";
} else {
    // echo "Certo!";
}

if (isset($_POST['submit']) && !empty($_POST['Tdocumento']) && !empty($_POST['documento']) && !empty($_POST['senha'])) {
  
$Tdocumento = $_POST['Tdocumento'];
$documento = $_POST['documento'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios where tipo_documento = '$Tdocumento' and documento = '$documento' and 
senha = '$senha'";
$result = $conexao->query($sql);

if (mysqli_num_rows($result) < 1) {
    
}
}
