<?php 
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php 
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    if(!empty($dados['submit'])){
        if ($dados['tipo_pessoa'] == 1){
            //echo"usuario";
            $query_pessoa = "INSERT INTO user_adm (cpf,nome,email,senha) VALUES (:cpf,:nome,:email,:senha)";
            $cad_pessoa = $conn->prepare($query_pessoa);
            $cad_pessoa->bindParam(':cpf', $dados['cpf']);
            $cad_pessoa->bindParam(':nome', $dados['nome']);
            $cad_pessoa->bindParam(':email', $dados['email']);
            $cad_pessoa->bindParam(':senha', $dados['senha']);
        }elseif ($dados['tipo_pessoa'] == 2){
           // echo"adm";
           $query_pessoa = "INSERT INTO user_adm (rg,nomeADM,fone,senhaADM) VALUES (:rg,:nomeADM,:fone,:senhaADM)";
           $cad_pessoa = $conn->prepare($query_pessoa);
           $cad_pessoa->bindParam(':rg', $dados['rg']);
           $cad_pessoa->bindParam(':nomeADM', $dados['nomeADM']);
           $cad_pessoa->bindParam(':fone', $dados['fone']);
           $cad_pessoa->bindParam(':senhaADM', $dados['senhaADM']);
        }
        
    }
    ?>
    <div class="box">
        <form method="POST" action="formulario.php"> <!--method="POST"-->
            <fieldset>
                <legend>
                    Cadastro
                     <p id="title-user" style="display:none;">Usuario</p>
                    <p id="title-adm" style="display:none;">Administrador</p>
                </legend>
                <br>
                <input type="radio" name="tipo_pessoa" id="tipo_pessoa" value="1" onchange="formUsuario();" required>Usuario 
            <input type="radio" name="tipo_pessoa" id="tipo_pessoa" value="2" onchange="formADM();" required>Administrador
            <br><br>
            <div id="Form-User" style="display:none;">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf">
                <br><br>
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                <br><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <br><br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
                <br><br>
            </div>
            <div id="Form-Adm" style="display:none;">
            <label for="rg">RG</label>
                <input type="text" name="rg" id="rg">
                <br><br>
                <label for="nomeADM">Nome Completo</label>
                <input type="text" name="nomeADM" id="nomeADM">
                <br><br>
                <label for="fone">Telefone</label>
                <input type="text" name="fone" id="fone">
                <br><br>
                <label for="senhaADM">Senha</label>
                <input type="password" name="senhaADM" id="senha">
                <br><br>
            </div>
            <div id="btn" style="display:none;">
                <input type="submit" name="submit" id="submit">
            </div>
        </fieldset>        
        </form>
    </div>
</body>
</html>
<script>
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