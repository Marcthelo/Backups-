<!DOCTYPE html>
<html lang="pt-br">

<head>
  <style>
    body {
      background-color: #818181;
      background-image: url("../../imgs/fundo1.png");
      background-size: cover;
    }

    nav {
      display: flex;
      flex-direction: row;
      background-color: #b20000;
      width: 100%;
      height: 15vh;
      justify-content: space-around;
      gap: 3em;
      align-items: center;
      color: white;
      display: flex;
      justify-content: start;
    }

    h1 {
      color: white;
    }

    a {
      text-decoration: none;
      color: red;
    }

    #a {
      border: solid 1px white;
      border-radius: 20pt;
      color: red;
      background-color: white;
    }

    #ab {
      color: darkred;
    }

    table,
    tr,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 5px 10px;
    }

    * {
      font-family: Arial, Helvetica, sans-serif;
    }

    /*odd aplicado em linhas ímpares*/
    table tr:nth-child(odd) {
      background-color: #818181;
    }

    /*even aplicado em linhas pares*/
    table tr:nth-child(even) {
      background-color: white;
    }

    #image {
      width: 85px;
      height: 65px;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
  <title>Registros</title>
</head>

<body>
  <?php
  session_start();
  if ((!isset($_SESSION['Tdocumento']) == true) and (!isset($_SESSION['documento'])) and (!isset($_SESSION['senha']))) {
    unset($_SESSION['Tdocumento']);
    unset($_SESSION['documento']);
    unset($_SESSION['senha']);
  }
  ?>
  <!-- Cabeçalho -->
  <nav style="background-color: #b20000" class="navbar navbar-expand-lg navbar-light bg-light">
    <h2 class="navbar-brand">SISTEMA DE REGISTRO</h2>
    <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav"> <!--utilizar esses dois para espaçamento sem quebra de linhas &nbsp; &#160;-->
        <button id="a"><a href="../FormulariosLogin/sair.php">Sair</a></button> &nbsp; &#160; &nbsp; &#160; &nbsp;
        &#160; &nbsp; &#160;
        <button id="a"><a href="../FormulariosLogin/home.php">Cadastrar Produtos</a></button><br>
      </div>
    </div>
  </nav>
  <h1 id="ab">Usuários</h1>
  <!-- Seção -->
  <div id="Form">
    <form action="Formulario.php" method="post">
      <input type="text" name="buscar" id="">
      <input type="submit" value="Buscar">
    </form>
  </div>

  <div id="Tables">
    <table border="1">
      <tr>
        <td style="background-color: #b20000; color: white;">IDs</td>
        <td style="background-color: #b20000; color: white;">NOMES</td>
        <td style="background-color: #b20000; color: white;">Usuario</td>
        <td style="background-color: #b20000; color: white;">tipo_documento</td>
        <td style="background-color: #b20000; color: white;">documento</td>
        <td style="background-color: #b20000; color: white;">EMAILS</td>
        <td style="background-color: #b20000; color: white;">senha</td>
        <td style="background-color: #b20000; color: white;">TELEFONES</td>
        <td style="background-color: #b20000; color: white;">cep</td>
        <td style="background-color: #b20000; color: white;">ESTADO</td>
        <td style="background-color: #b20000; color: white;">CIDADE</td>
        <td style="background-color: #b20000; color: white;">DataCadastro</td>
        <td style="background-color: #b20000; color: white;">OPÇÕES</td>
      </tr>
      <?PHP
      #cnx = conexao
      $cnx = mysqli_connect("localhost", "root", "", "rsp_banco");
      $sqle = "SELECT id,nome,tipo_usuario,tipo_documento,documento,email,senha,telefone,cep,estado,cidade,data_cadastro
FROM usuarios 
ORDER BY id ASC";

      $rta = mysqli_query($cnx, $sqle);
      while ($mostrar = mysqli_fetch_row($rta)) {
        ?>
        <tr>
          <td><?php echo $mostrar['0'] ?></td>
          <td><?php echo $mostrar['1'] ?></td>
          <td><?php echo $mostrar['2'] ?></td>
          <td><?php echo $mostrar['3'] ?></td>
          <td><?php echo $mostrar['4'] ?></td>
          <td><?php echo $mostrar['5'] ?></td>
          <td><?php echo $mostrar['6'] ?></td>
          <td><?php echo $mostrar['7'] ?></td>
          <td><?php echo $mostrar['8'] ?></td>
          <td><?php echo $mostrar['9'] ?></td>
          <td><?php echo $mostrar['10'] ?></td>
          <td><?php echo $mostrar['11'] ?></td>
          <!-- manipular registros -->
          <td>
            <a href="../FormulariosLogin/edit.php?id=$mostrar[0]">Editar</a>
            <a href="">Excluir</a>
          </td>
        </tr>
        <?php
        #url dos arquivos ../FormulariosLogin/
      }
      ?>
    </table>
    <br><br><br>
      <!--Produtos -->
      <div id="Form">

        <h1 id="ab">Produtos</h1>
        <form action="Formulario.php" method="post">
          <input type="text" name="buscar" id="">
          <input type="submit" value="Buscar">
        </form>
      </div>

      <table>
    </div>
    <div id="TablesProdutos">
      <table border="1">
        <tr>
          <td style="background-color: #b20000; color: white;">IDs</td>
          <td style="background-color: #b20000; color: white;">CODIGO</td>
          <td style="background-color: #b20000; color: white;">NOMES</td>
          <td style="background-color: #b20000; color: white;">IMAGEM</td>
          <td style="background-color: #b20000; color: white;">DESCRIÇÃO</td>
          <td style="background-color: #b20000; color: white;">FABRICANTES</td>
          <td style="background-color: #b20000; color: white;">PEÇA</td>
          <td style="background-color: #b20000; color: white;">VOLTS</td>
          <td style="background-color: #b20000; color: white;">PREÇO</td>
          <td style="background-color: #b20000; color: white;">QT</td>
          <td style="background-color: #b20000; color: white;">DataProduto</td>
          <td style="background-color: #b20000; color: white;">OPÇÕES</td>
        </tr>
        <?PHP
        #cnx = conexao
        $cnx = mysqli_connect("localhost", "root", "", "rsp_banco");
        $sqle = "SELECT 
        prd.id_produto, 
        pdd.codigo, 
        prd.nome_produto,
        prd.img_produto, 
        prd.descricao,
        prd.tipo_fabricante,
        prd.peca,
        prd.qtd_volts,
        pdd.preco,
        pdd.quantidade, 
        pdd.dataProduto 
        FROM pedido as pdd inner join produtos as prd
        ON pdd.codigo_id = prd.id_codigo 
        ORDER BY id_produto ASC" ;

        $rta = mysqli_query($cnx, $sqle);
        while ($mostrar = mysqli_fetch_row($rta)) {
          ?>
          <tr>
            <td><?php echo $mostrar['0'] ?></td>
            <td><?php echo $mostrar['1'] ?></td>
            <td><?php echo $mostrar['2'] ?></td>
            <td><?php echo "<img id='image' src='" . $mostrar['3'] . "' alt='imagem'>"; ?></td>
            <td><?php echo $mostrar['4'] ?></td>
            <td><?php echo $mostrar['5'] ?></td>
            <td><?php echo $mostrar['6'] ?></td>
            <td><?php echo $mostrar['7'] ?></td>
            <td><?php echo $mostrar['8'] ?></td>
             <td><?php echo $mostrar['9'] ?></td>
             <td><?php echo $mostrar['10'] ?></td>
            <!-- manipular registros -->
            <td>
              <a id="a2" href="../FormulariosLogin/edit.php?id=$mostrar[0]">Editar</a>
              <a id="a2" href="">Excluir</a>
            </td>
          </tr>
          <?php
          #url dos arquivos ../FormulariosLogin/
        }
        ?>
      </table>
    </div>
</body>

</html>