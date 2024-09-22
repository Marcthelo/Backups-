<?php 
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'rsp_banco';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) {
    echo "Erro";
} else {
   // echo "Certo!";
}
 
        //Receber dados do formulario
        $tipoUsuario = $_POST['tipoUsuario'];

        $id = $_POST['id'];

        $tipoDocumento = $_POST['tipoDocumento'];

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        $razaoSocial = $_POST['razaoSocial'];
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
        if ($tipoUsuario == 'Fisica') {
           $sql = "INSERT INTO usuarios(tipo_usuario,nome,tipo_documento,documento,email,senha,data_nascimento,telefone,cep,estado,cidade)
           VALUES('$tipoUsuario','$nome','$tipoDocumento','$cpf','$email','$senha','$data_nascimento','$telefone','$cep','$estado','$cidade')";

        } elseif ($tipoUsuario == 'Juridica') {
            $sql = "INSERT INTO usuarios(tipo_usuario,razao_social,tipo_documento,documento,email,senha,telefone,cep,estado,cidade)
            VALUES('$tipoUsuario','$razaoSocial','$tipoDocumento','$cnpj','$emailJuri','$senhaJuri','$telefoneJuri','$cepJuri','$estadoJuri','$cidadeJuri')";

        } elseif ($tipoUsuario == 'Administrador') {
            $sql = "INSERT INTO administradores(tipo_usuario,nome,tipo_documento,documento,senha,email,telefone,cep,estado,cidade)
            VALUES('$tipoUsuario','$nomeAdm','$tipoDocumento','$cpfAdm','$senhaAdm','$emailAdm','$telefoneAdm','$cepAdm','$estadoAdm','$cidadeAdm')";
        }
        else {
            echo "<p class='error'>Tipo de usuário inválido!</p>";
        }
        // Executar a consulta SQL
        if (mysqli_query($conexao, $sql)) {
          //  echo "<p style='color: green;' class='success'>Cadastro realizado com sucesso!</p>";
          header("Location: ../Login.php");
        } else {
            echo "<p style='color:red;' class='error'>Erro ao cadastrar usuário: " . mysqli_error($conexao) . "</p>";
        }
// Prepare a consulta SQL
$sqly = "UPDATE usuarios SET ";
if ($tipoDocumento === 'CPF') {
    $sqly .= "cpf = :tipo_documento";
} else {
    $sqly .= "cnpj = :tipo_documento";
}
$sqly .= " WHERE id = :id";

// Execute a consulta
$stmt = $pdo->prepare($sqly);
$stmt->execute([':tipo_documento' => $tipoDocumento, ':id' => $id]);
