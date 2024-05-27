<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
        a{
            text-decoration: none;
            color: rgb(255, 255, 255);
        }

        body {
            background-color:#818181;
            background-image: url("../../imgs/fundo1.png");
            background-size: cover;
        }

        fieldset {
            background-color: #B40000;
            border: solid #FF0000;
            border-radius: 9%;
            border-width: 20px;
            width: 18%;
            align-items: center;
            margin-left: 40%;
           margin: auto;
        }
 
        input {
            background-color: #FFFFFF;
            border-radius: 9%;
            border-color: #FFFFFF;
            margin-left: 18%
        }

        label {
            color: #f0f0f0;
            text-decoration: bold;
            margin-top: 0%;
            border-radius: 30%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        #button {
            color: #ff0000;
            border-radius: 9%;
            margin-left: 20%
            
        }
 
        legend {
            margin-top: 10%;
            color: #ffffff;
            border-radius: 30%;
            margin-left: 20%
        }
        #botoes {
            display: flex;
        }

        p {
            color: #9F9F9F;
            border-radius: 30%;
            margin-left: 20%
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

  $tipo_usuario = $_POST['tipo_usuario'];
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $cnpj = $_POST['cnpj'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $data_nascimento = $_POST['data_nascimento'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];

  if ($tipo_usuario == "cliente") {
    $sql = "INSERT INTO cliente (tipo_usuario, nome, cpf, senha, email, data_nascimento, telefone, endereco, estado, cidade) VALUES ('$tipo_usuario', '$nome', '$cpf', '$senha', '$email', '$data_nascimento', '$telefone', '$endereco', '$estado', '$cidade')";
} else if ($tipo_usuario == "empresa") {
    $razaoSocial = $_POST['nome']; // Obter valor do campo 'razao_social' do formulário
    $cnpj = $_POST['cnpj']; // Obter valor do campo 'cnpj' do formulário

    $sql = "INSERT INTO empresa (tipo_usuario, razao_social, cnpj, senha, email, telefone, endereco, estado, cidade) VALUES ('$tipo_usuario', '$nome', '$cnpj', '$senha', '$email', '$telefone', '$endereco', '$estado', '$cidade')";
} else if ($tipo_usuario == "adm") {
    $email = $_POST['email'];

    $sql = "INSERT INTO adm (tipo_usuario, nome, cpf, senha, email, endereco, estado, cidade) VALUES ('$tipo_usuario', '$nome', '$cpf','$senha', '$email', '$endereco', '$estado', '$cidade')";
} else {
    echo "<p class='error'>Tipo de usuário inválido!</p>";
}

// Executar a consulta SQL
if (mysqli_query($conexao, $sql)) {
    //echo "<p style='color: green;' class='success'>Cadastro realizado com sucesso!</p>";
} else {
    echo "<p style='color:red;' class='error'>Erro ao cadastrar usuário: " . mysqli_error($conexao) . "</p>";
}
}
  //  $result = mysqli_query($conexao, "INSERT INTO cliente(tipo_usuario,nome,cpf,senha,email,data_nascimento,telefone,endereco,estado,cidade,nivel_acesso) VALUES('$tipo_usuario','$nome','$cpf','$senha','$email','$data_nascimento','$telefone','$endereco','$estado','$cidade','$nivel_acesso')");
    ?>
    <div class="box">
        <form method="POST" action="Formulario.php"> <!--method="POST"-->
            <fieldset>
                <legend>
                    Cadastro
                </legend>
            <div>
        <label for="tipo_usuario">Tipo de Usuário:</label>
        <select id="tipo_usuario" required name="tipo_usuario">
            <option value="">Selecione</option>
            <option value="cliente">Cliente</option>
            <option value="empresa">Empresa</option>
            <option value="adm">Administrador</option>
        </select>
        <br><br>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <br><br>
        <label for="cpf">CPF:</label>
        <input maxlength="11" type="text" id="cpf" name="cpf">
        <br><br>
        <label for="cnpj">CNPJ:</label>
        <input maxlength="14" type="text" name="cnpj" id="cnpj">
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento">
        <br><br>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone">
        <br><br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">
        <br><br>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="">Selecione </option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <br><br>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade">
        <br><br>
            </div>
            <div id="btn">
            <input id="button" name="submit" type="submit">
            <a href="home.php"><input id="button" type="button" value="Voltar"></a>
            </div>
            <p>Já possui um <a href="../FormulariosLogin/Login.php">cadastro?</p>
        </fieldset>        
        </form>
    </div>
</body>
</html>