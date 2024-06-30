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
<?php # video gustavo neit 14:25
if (!empty($_GET['idcliente'])) {
    include_once('config.php');
$id = $_GET['idcliente'];

$sqlSelect = "SELECT * FROM cliente WHERE idcliente = $id";

$result = $conexao->query($sqlSelect);

if($result->num_rows > 0){
    while ($user_data = mysqli_fetch_assoc($result)) {

        $tipo_usuario = $user_data['tipo_usuario'];
        $nome = $user_data['nome'];
        $cpf = $user_data['cpf'];
        $cnpj = $user_data['cnpj'];
        $senha = $user_data['senha'];
        $email = $user_data['email'];
        $data_nascimento = $user_data['data_nascimento'];
        $telefone = $user_data['telefone'];
        $endereco = $user_data['endereco'];
        $estado = $user_data['estado'];
        $cidade = $user_data['cidade'];
    }
} else {
    header('Location: ../Paginas/Registros.php');
}

}
    ?>
    <div class="box">
        <form method="POST" action="Formulario.php"> <!--method="POST"-->
            <fieldset>
                <legend>
                    Cadastro
                </legend>
            <div>
        <label for="tipo_usuario">Tipo de Usuário:</label>
        <select id="tipo_usuario" required name="tipo_usuario" value="<?php echo $tipo_usuario ?>">
            <option value="">Selecione</option>
            <option value="cliente">Cliente</option>
            <option value="empresa">Empresa</option>
            <option value="adm">Administrador</option>
        </select>
        <br><br>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>">
        <br><br>
        <label for="cpf">CPF:</label>
        <input maxlength="11" type="text" id="cpf" name="cpf" value="<?php echo $cpf ?>">
        <br><br>
        <label for="cnpj">CNPJ:</label>
        <input maxlength="14" type="text" name="cnpj" id="cnpj" value="<?php echo $cnpj ?>">
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="<?php echo $senha ?>">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>">
        <br><br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $data_nascimento ?>">
        <br><br>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" value="<?php echo $telefone ?>">
        <br><br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" value="<?php echo $endereco ?>">
        <br><br>
        <label for="estado">Estado:</label>
        <select name="estado" id="estado" value="<?php echo $estado ?>">
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
        <input type="text" id="cidade" name="cidade" value="<?php echo $cidade ?>">
        <br><br>
            </div>
            <div id="btn">
            <input id="button" name="submit" type="submit">
            <a href="../Paginas/Registros.php"><input id="button" type="button" value="Voltar"></a>
            </div>
        </fieldset>        
        </form>
    </div>
</body>
</html>