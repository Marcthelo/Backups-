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

        button {
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
    <title>Cadastro</title>
</head>
<body>
    <?php 
    if (isset($_POST['submit'])) {
       include_once('conexao.php');
    
    //Receba os dados do formulário
            // usuario/cliente
        $tipo_usuario = $_POST['tipo_usuario'];
        $cpf = $_POST['cpf'];
        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
            //Administrador
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $senha = $_POST['senha'];
            $nivelAcesso = $_POST['nivelAcesso'];
        //Validação básica
            if (empty($tipo_usuario) || empty($cpf) || empty($cnpj) || empty($nome) || empty($senha) || empty($email) || empty($data_nascimento) || empty($telefone) || empty($endereco) || empty($cidade) || empty($estado) || empty($cpf) || empty($nome) || empty($telefone) || empty($senha) || empty($nivelAcesso)) {
                header('Location: FormularioCliente.html?erro=campos_vazios');
                exit;
            }
            //Validação específica para ADM
            if ($tipo_usuario == 'ADM' && empty($nivelAcesso)) {
                header('Location:FormularioCliente.html?erro=nivel_acesso_vazio');
                exit;
            }
            //Preparar Consultas SQL

            //Defina as tabelas de destino
            $tabelaCliente = "cliente";
            $tabelaAdm = "adm";

            //Consulta para ADM (inclua nivel de acesso)
            if ($tipo_usuario == 'ADM') {
                $sqlAdm = "INSERT INTO $tabelaAdm (cpf,nome,telefone,senha,nivelAcesso) VALUES ($cpf,$nome,$telefone,$senha,$nivelAcesso)"; 
                $stmtADM = $conn->prepare($sqlAdm);

                //Vincular parâmetros aos dados do formulário
                $stmtADM->bind_param("sssss", $_POST['cpf'],$_POST['nome'],$_POST['telefone'],$_POST['senha'], $_POST['nivelAcesso']);
                $stmtADM->execute();

            }
            
            //Prepare a consulta SQL para inserir dados na tabela de cliente
            $sqlCliente = "INSERT INTO $tabelaCliente(tipo_usuario, cpf, cnpj, nome, senha, email, data_nascimento, telefone, endereco, cidade, estado) VALUES ($tipo_usuario, $cpf, $cnpj, $nome, $senha, $email, $data_nascimento, $telefone, $endereco, $cidade,$estado)";
            //Prepare a declaração para execução da consulta de usuario
            $stmtCliente = mysqli_prepare($conn, $sqlCliente);

            //Vincule os parâmetros da consulta de cliente aos dados do formulário
            //SSSS Secondary Security Screening Selection
            mysqli_stmt_bind_param($stmtCliente, "ssss",$tipo_usuario, $cpf, $cnpj, $nome, $senha, $email, $data_nascimento, $telefone, $endereco, $cidade,$estado);
        }
    ?>
    <div class="box">
        <form method="POST" action="FormularioCliente.php"> <!--method="POST"-->
            <fieldset>
                <legend>
                    Cadastro
                     <p id="title-user" style="display:none;">Usuario</p>
                    <p id="title-adm" style="display:none;">Administrador</p>
                </legend>
                <br>
                <label for="nivelAcesso"></label>
                <input type="radio" name="tipo_usuario" id="nivelAcesso" value="1" onchange="formUsuario();" required />Usuario 
            <input type="radio" name="tipo_usuario" id="nivelAcesso" value="2" onchange="formADM();" required />Adm
            <br><br>
            <!--Formulario do Usuario-->
            <div id="Form-User" style="display:none;">
           <!-- CPF E CNPJ -->
           <label for="tipoDocumento">Tipo de Documento: </label>
        <select id="tipoDocumento" name="tipoDocumento" required>
            <option value="">Selecione...</option>
            <option value="cpf"  maxlength="11">CPF</option>
            <option value="cnpj" maxlength="14">CNPJ</option>
        </select>
        <br><br>
        <label for="documento">Número do Documento: </label>
        <input type="text">
        <br><br>
        <div id="campoDocumento">
        </div>
        <script>
            $(document).ready(function() {
                // Função para criar o campo de input de acordo com o tipo de documento selecionado
                function criarCampoDocumento(tipo) {
                    var campo = '';
                    if (tipo === 'cpf') {
                        campo = '<input type="text" id="cpf" name="cpf" maxlength="11" placeholder="Digite seu CPF" />';
                    } else if (tipo === 'cnpj') {
                        campo = '<input type="text" id="cnpj" name="cnpj" maxlength="14" placeholder="Digite seu CNPJ" />';
                    }
                    $('#campoDocumento').html(campo);
    
                    // Aplica máscara de formatação ao input criado
                    if (tipo === 'cpf') {
                        $('#cpf').mask('000.000.000-00');
                    } else if (tipo === 'cnpj') {
                        $('#cnpj').mask('00.000.000/0000-00');
                    }
                }
                // Manipula o dropdown e cria o campo de input dinâmico
                $('#tipoDocumento').change(function() {
                    var tipo = $(this).val();
                    criarCampoDocumento(tipo);
                });
    
                // Cria o campo de input inicial ao carregar a página
                criarCampoDocumento('');
    
                // Validação do formulário no submit (opcional)
                $('#formulario').submit(function(e) {
                    e.preventDefault(); // Evita o envio padrão do formulário
    
                    // Valida se o tipo de documento e o número do documento foram preenchidos
                    if ($('#tipoDocumento').val() === '' || $('#documento').val() === '') {
                        alert('Preencha todos os campos!');
                        return false;
                    }
    
                    // Valida o formato do CPF/CNPJ
    
                    // Se tudo estiver ok, envie o formulário 
                });
            });
        </script>
        <!-- FIM DO CPF E CNPJ -->
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                <br><br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
                <br><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <br><br>
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento">
                <br><br>
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">
                <br><br>
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado">
                <br><br>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
                <br><br>
            </div>
            <!--Formulario Do Administrador-->
            <div id="Form-Adm" style="display:none;">
            <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf">
                <br><br>
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                <br><br>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="fone">
                <br><br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
                <br><br>
            </div>
            <div id="btn" style="display:none;">
                <br>
            <button type="submit">Enviar</button>
            <button>Voltar</button>
            </div>
            <p> Já possui um <a href="../FormulariosLogin/Login.html">cadastro?</p>
        </fieldset>        
        </form>
    </div>
</body>
</html>
<script>
    //USUARIO E ADMINISTRADOR
    function formUsuario(){
        // Mostra oque está carregando 
        //console.log("Carregar formualario usuario.");

        //se selecionado devera aparecer ao inves de "Cadastro" deve aparecer "Cadastro Usuario"
        document.getElementById("title-user").style.display = 'block';
        //caso seja selecionado outra opção deve desaparecer
        document.getElementById("title-adm").style.display = 'none';

        //Quando o cadastro do cliente for selecionada deve aparcer
        document.getElementById("Form-User").style.display = 'block';
        //Quando o cadastro do Administrador for selecionado deve desaparcer o cadastro do usuario.
     document.getElementById("Form-Adm").style.display = 'none';

     document.getElementById("btn").style.display = 'block';

    }
    function formADM(){
         // Mostra oque está carregando 
        //console.log("Carregar formulario ADM.");

        //se selecionado devera aparecer ao inves de "Cadastro" deve aparecer "Cadastro Administrador"
        document.getElementById("title-adm").style.display = 'block';
        //caso seja selecionado outra opção deve desaparecer
        document.getElementById("title-user").style.display = 'none';

        //Quando o cadastro do Administrador for selecionado deve desaparecer o cadastro do usuario
        document.getElementById("Form-User").style.display = 'none';
        //Quando o cadastro do cliente for selecionado deve desaparecer o cadastro do administrador.
        document.getElementById("Form-Adm").style.display = 'block';

        document.getElementById("btn").style.display = 'block';
    }
</script>