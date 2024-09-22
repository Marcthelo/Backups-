<?php
session_start();

// Conexão com o banco de dados (ajuste para sua configuração)
$pdo = new PDO("mysql:host=localhost;dbname=rsp_banco", "root", "");

// Recebe os dados do formulário
$nome = $_POST['nome'];
$documento = $_POST['documento'];
$tipo_documento = $_POST['tipo'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Validação básica (adicione mais validações conforme necessário)
if (empty($nome) || empty($documento) || empty($tipo_documento) || empty($email) || empty($senha)) {
    echo json_encode(['error' => 'Por favor, preencha todos os campos.']);
    exit;
}


// Consulta ao banco de dados
$sql = "SELECT * FROM usuarios WHERE ";
if ($tipo_documento === 'cpf') {
    $sql .= "cpf = :documento AND senha = :senha";
} else {
    $sql .= "cnpj = :documento AND senha = :senha";
}

$stmt = $pdo->prepare($sql);
$stmt->execute([':documento' => $documento, ':senha' => $senha]);

// Verifica se o usuário existe
if ($stmt->rowCount() > 0) {
    $usuario = $stmt->fetch();

    // Verifica a senha (utilize password_hash e password_verify para segurança)
    if (password_verify($senha, $usuario['senha'])) {
        // Autenticação bem-sucedida
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Senha incorreta.']);
    }
} else {
    echo json_encode(['error' => 'Usuário não encontrado.']);
}