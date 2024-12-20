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
    header('Location: ../SessãoLogin(2)/Registros.php');
}
}
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleForm.css">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
    <form method="POST" action="processa_cadastro.php">
        <fieldset>
            <legend>
                Cadastro
            </legend>
            <div>
        <label for="tipoUsuario">Tipo de Usuário</label>
        <select name="tipoUsuario" id="tipoUsuario">
            <option value="">Selecione...</option>
            <option value="Fisica">Pessoa Física</option>
            <option value="Juridica">Pessoa Jurídica</option>
            <option value="Administrador">Administrador</option>
        </select>
        <br><br>
        <div id="camposFisica" class="campos">
            <label for="nome">Nome: </label> 
                <input type="text" id="nome" name="nome">
                <br><br>
            <label for="cpf">CPF: </label>
                <input type="text" maxlength="11" ="cpf" name="cpf" oninput="formatarCPF(this)">
                <br><br>
            <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    <br><br>
            <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                    <br><br>
            <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento">
                    <br><br>
            <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" oninput="formatarTelefone(this)">
                    <br><br>
            <label for="cep">Cep:</label>
                    <input type="text" name="cep" id="cep" oninput="formatarCEP(this)">
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
    <div id="camposJuridica" class="campos">
        <label for="razaoSocial">Razão Social:</label>
             <input type="text" name="razaoSocial" id="razaoSocial">
        <br><br>
        <label for="cnpj">CNPJ:</label>
             <input maxlength="14" type="text" name="cnpj" id="cnpj" oninput="formatarCNPJ(this)">
        <br><br>
        <label for="email">Email:</label>
            <input type="email" name="email" id="email">
                    <br><br>
        <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
                    <br><br>
        <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" oninput="formatarTelefone(this)">
            <br><br>
        <label for="cep">Cep</label>
            <input type="text" maxlength="8" name="cep" id="cep" oninput="formatarCEP(this)">
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
    <div id="camposAdministrador" class="campos">
        <label for="nomeAdm">Nome Completo:</label>
            <input type="text" name="nomeAdm" id="nomeAdm">
        <br><br>
        <label for="cpfAdm">CPF: </label>
            <input type="text" maxlength="11" id="cpfAdm" name="cpfAdm" oninput="formatarCPF(this)">
        <br><br>
        <label for="senhaAdm">Senha:</label>
            <input type="password" name="senhaAdm" id="senhaAdm">
        <br><br>
        <label for="emailAdm">Email:</label>
            <input type="email" name="emailAdm" id="emailAdm">
        <br><br>
        <label for="telefoneAdm">Telefone</label>
            <input type="tel" name="telefoneAdm" id="telefoneAdm" oninput="formatarTelefone(this)">
        <br><br>
        <label for="cepAdm">Cep:</label>
            <input type="text" name="cepAdm" maxlength="8" id="cepAdm" oninput="formatarCEP(this)">
        <br><br>
        <label for="estadoAdm">Estado:</label>
            <select name="estadoAdm" id="estadoAdm">
            <option value="">Selecione</option>
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
        <label for="cidadeAdm">Cidade:</label>
            <input type="text" id="cidadeAdm" name="cidadeAdm">
    </div>
</div>
    <br><br>
    <div id="btn">
    <button type="submit">Cadastrar</button>
    <button type="reset">Apagar</button>
    <p>Já possui um <a href="Login.php">cadastro?</p>
</div>
</fieldset>
    </form>
</div>
    <script src="../FormulariosLogin/JS/script.js" async></script>
    <script src="../FormulariosLogin/JS/formatarCampo.js" defer></script>
</body>
</html>
    <!-- 
    async: O script será carregado e executado assim que estiver disponível, sem bloquear o carregamento do restante da página.
    defer: O script será carregado em paralelo com o restante da página, mas será executado apenas após o carregamento do HTML.
    -->