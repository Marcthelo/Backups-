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

//Receber dados do formulario
$tipoUsuario = $_POST['tipoUsuario'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$Tdocumento = $_POST['Tdocumento'];
$TdocumentoF = $_POST['TdocumentoF'];
$TdocumentoADM = $_POST['TdocumentoADM'];

$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$emailJuri = $_POST['emailJuri'];
$senhaJuri = $_POST['senhaJuri'];
$telefoneJuri = $_POST['telefoneJuri'];
$cepJuri = $_POST['cepJuri'];
$estadoJuri = $_POST['estadoJuri'];
$cidadeJuri = $_POST['cidadeJuri'];

$nomeAdm = $_POST['nomeAdm'];
$cpfAdm = $_POST['cpfAdm'];
$senhaAdm = $_POST['senhaAdm'];
$emailAdm = $_POST['emailAdm'];
$telefoneAdm = $_POST['telefoneAdm'];
$cepAdm = $_POST['cepAdm'];
$estadoAdm = $_POST['estadoAdm'];
$cidadeAdm = $_POST['cidadeAdm'];

//Fazer a query
switch ($tipoUsuario) {
    case 'Fisica':
        $sql = "INSERT INTO usuarios(tipo_usuario,nome,tipo_documento,documento,email,senha,telefone,cep,estado,cidade)
                VALUES('$tipoUsuario','$nome','$TdocumentoF','$cpf','$email','$senha','$telefone','$cep','$estado','$cidade')";
        break;
    case 'Juridica':
        $sql = "INSERT INTO usuarios(tipo_usuario,nome,tipo_documento,documento,email,senha,telefone,cep,estado,cidade)
                VALUES('$tipoUsuario','$razaosocial','$Tdocumento','$cnpj','$emailJuri','$senhaJuri','$telefoneJuri','$cepJuri','$estadoJuri','$cidadeJuri')";
        break;
    case 'Administrador':
        $sql = "INSERT INTO administradores(tipo_usuario,nome,tipo_documento,documento,senha,email,telefone,cep,estado,cidade)
                VALUES('$tipoUsuario','$nomeAdm','$TdocumentoADM','$cpfAdm','$senhaAdm','$emailAdm','$telefoneAdm','$cepAdm','$estadoAdm','$cidadeAdm')";
        break;
    default:
        echo "<p class='error'>Tipo de usuário inválido!</p>";
}
// Executar a consulta SQL
if (mysqli_query($conexao, $sql)) {
      echo "<p style='color: green;' class='success'>Cadastro realizado com sucesso!</p>";
    header("Location: ../Login.html");
} else {
    echo "<p style='color:red;' class='error'>Erro ao cadastrar usuário: " . mysqli_error($conexao) . "</p>";
}
