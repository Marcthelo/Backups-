<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RSP - PRODUTOS X </title>
    <!--LINKS INICIO-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <!--LINKS FIM-->
    <!--STYLE INICIO-->
    <style>
      * {
        padding: 0;
        margin: 0;
      }

      body {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        width: 100vw;
        max-width: 100vw;
        min-width: 1200px;
      }

      /*Referente ao cabeçalho do site */
      header {
        display: flex;
        flex-direction: row;
        background-color: #b20000;
        width: 100%;
        height: 15vh;
        justify-content: space-around;
        gap: 3em;
        align-items: center;
        color: white;
      }

      #logo {
        width: fit-content;
        height: fit-content;
        background-color: #b20000;
      }

      #menuBotao {
        width: fit-content;
        height: fit-content;
        cursor: pointer;
        background: none;
        border: none;
      }

      #menuImagem {
        width: 3.3rem;
        height: 3.3rem;
      }

      /* Específica o que acontece quando */
      /* o mouse está sobre o elemento */
      #menuBotao:hover {
        opacity: 50%;
      }

      /* Específica o que acontece quando */
      /* o elemento é clicado */
      #menuBotao:active {
        opacity: 100%;
      }

      .menuAtivo {
        background-color: white;
        border: 1px solid black;
      }

      .menuBotaoDesativo {
        filter: invert(100%); /* Inverte a cor do elemento (preto pra branco) */
      }

      #menuDiv {
        display: flex;
        justify-content: start;
      }

      #departamentosDiv {
        display: flex;
        flex-direction: row;
        position: absolute;
        width: 50vw;
        height: 55vh;
        border: 1px solid black;
        background-color: white;
        margin-top: 3.3rem;
        color: black;
      }

      .departamentosDesativo {
        visibility: hidden;
      }

      .departamentosDivInterior {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: start;
        padding-left: 1em;
        width: 100%;
        height: 100%;
        font-size: 1.5em;
      }

      #departamentos1 {
        width: 50%;
        height: 100%;
        border-right: 1px solid black;
      }

      #departamentos2 {
        width: 50%;
        height: 100%;
      }

      #titulo {
        width: fit-content;
        height: fit-content;
        margin: 0;
        font-size: 1.6em;
      }


      /* COMEÇA O PEDIDOS */

      #pedidosBotao:hover {
        opacity: 50%;
      }

      /* Específica o que acontece quando */
      /* o elemento é clicado */
      #pedidosBotao:active {
        opacity: 100%;
      }

      .pedidosAtivo {
        background-color: white;
        border: 1px solid black;
      }

      .pedidosBotaoDesativo{
        filter: invert(100%); /* Inverte a cor do elemento (preto pra branco) */
      }

      #Div {
        display: flex;
        justify-content: start;
      }

      #departamentosDiv {
        display: flex;
        flex-direction: row;
        position: absolute;
        width: 50vw;
        height: 55vh;
        border: 1px solid black;
        background-color: white;
        margin-top: 3.3rem;
        color: black;
      }

      .departamentosDesativo {
        visibility: hidden;
      }

      .departamentosDivInterior {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: start;
        padding-left: 1em;
        width: 100%;
        height: 100%;
        font-size: 1.5em;
      }

      #departamentos1 {
        width: 50%;
        height: 100%;
        border-right: 1px solid black;
      }

      #departamentos2 {
        width: 50%;
        height: 100%;
      }
      #entrarBotao {
        width: fit-content;
        height: fit-content;
        margin: 0;
        font-size: 1.6em;
        cursor: pointer;
      }

      #entrarBotao:hover {
        color: rgb(191, 191, 191);
      }

      #entrarBotao:active {
        color: white;
      }

      #pedidosBotao {
        width: fit-content;
        height: fit-content;
        margin: 0;
        font-size: 1.6em;
        cursor: pointer;
      }

      #pedidosBotao:hover {
        color: rgb(191, 191, 191);
      }

      #pedidosBotao:active {
        color: white;
      }

      #barraPesquisaDiv {
        width: 23.5%;
        height: 2.8em;
        display: flex;
        align-items: center;
        justify-content: end;
      }

      .barraPesquisa {
        width: 100%;
        height: 100%;
        border: 1px solid black;
        border-radius: 2em;
        font-size: 1.4em;
        padding-left: 1em;
      }

      #pesquisaIcone {
        margin: 0;
        position: absolute;
        width: 2.1em;
        height: 2.1em;
        cursor: pointer;
        margin-right: 1.5em;
      }

      /* Rodapé igual, mas agora vamos usar justify-content */
      /* Usamos justify content space around do flex para separar entre os elements mais fácil */
      footer {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 15vh;
        background: #c60000;
        justify-content: space-around;
        align-items: center;
        font-size: 1.3em;
        color: white;
      }

      h4 {
        text-decoration: none;
        font-size: 2em;
        margin-top: 15%;
        margin-left: 10%;
        margin-right: 10%;
        text-align: justify;
        font-weight: normal;
      }
      a {
        text-decoration: none;
        color: white;
      }

      .menuPedidos{
    padding: 10px;
    width: 200px;
  }

  .departamentosPedidos{
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  .departamentosPedidos li {
    cursor: pointer;
    margin-bottom: 5px;
    display: flex;
  }

  .departamet1 {
    display: none;
  }


  .sub-menu2 {
    list-style-type: none;
    padding-left: 20px;
    display: none;
    flex-direction: row;
    position: absolute;
    width: 24vw;
    height: 55vh;
    background-color: #ff1818;
    border-color: #cc0000;
    border-style:solid;
    opacity: 100;
  }
  .sub-menu li {
    margin-bottom: 5px;
    display: flex;
  }

  .entrar {
    margin: auto;
  }

  .hover menuPedidos {
    color:#555;
  }

  /* PRODUTOS - TUDO QUE SE REFERE AO CENTRO DO CÓDIGO */

  /* O corpo é nossa flex que ajusta os elementos do */
      /* interior da página. */
      /* Podemos já também alinhar os itens no centro */
      /* Também colocamos uma altura mínima de 85vh, pra cobrir o resto da página */
      /* Mas isso não restringe que ele ajuste seu tamanho para ficar maior se */
      /* necessário, gap em 5em define um espaço entre cada elemento */
      #corpo {
        background-color: #d8d8d8;
        display: flex;
        height: 50%;
      }

  /* PRODUTOS NOVO COM O CODIGO COLADO */
  .card1 {
  text-align: center;
  display: inline;
  margin: auto;
  margin-left: 30px;
  margin-top: 30px;
  width: 280px; /* Ajuste a largura do card */
  background-color:  #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Adiciona sombra ao card */
  border-radius: 10px; /* Arredonda os cantos do card */
}

.tudoProdutos {
height: 5rem;
display: flex;
width: 5rem;
}

#image {
        width: 200px;
        height: 200px;
      }

.content {
  padding: auto;
}

.content .price {
  color: white;
  font-weight: 800;
  font-size: 50px;
}

.content .description {
  color: black;
  margin-top: 10px;
  font-size: 14px;
}

.content .title {
  font-weight: 800;
  text-transform: uppercase;
  color: black;
  margin-top: 10px;
  font-size: 25px;
  letter-spacing: 1px;
}

#o {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: none;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
  font-size: .75rem;
  padding: 0.75rem 1.5rem;
  border-radius: 0.5rem;
  width: 90%;
  background-color: #ff0000; /* Cor do botão */
    color: #fff; /* Cor do texto do botão */
    border: none; /* Remove a borda do botão */
    align-items: center;
    text-align: center;
    padding: 10px 20px; /* Ajuste o padding do botão */
    border-radius: 5px; /* Arredonda os cantos do botão */
    width: 250px;
    margin-left: 4%;
    cursor: pointer; /* Exibe o cursor de ponteiro ao passar o mouse sobre o botão */
    transition: background-color 0.3s ease; /* Adiciona transição ao clique */
}

#o:hover{
  background-color: #720000; /* Cor do botão ao passar o mouse */
}
  
h3 { /*TÍTULO / NOME DO PRODUTO */
    font-size: 20px; /* Ajuste o tamanho do título */
    margin-bottom: 10px;
}

p { /* Descriçao do produto */ 
    font-size: 14px; /* Ajuste o tamanho do texto */
    line-height: 1.5; /* Aumenta o espaçamento entre as linhas de texto */
}


#logo1{
  width: 150px;
  height: 75px;
}

img {
  width: 10px;
  height: 10px;
}

.certo{
  display: flex;
  grid-template-columns: auto auto auto auto;
  margin-inline: center;
  flex-wrap: wrap;
}

    </style>
    <!--STYLE FIM-->
  </head>
  <body>
    <!-- Cabeçalho -->
    <header>
      <!-- Header em Flex Display (Elementos em Ordem e Blocos) -->
      <div id="logo"> <a href="home.php"> <img id="logo1" src="../../imgs/rsp2.png" alt="Foto-Logo" /> </a> </div>
      <!-- Logo fit-content só seu conteúdo dentro -->
      <div id="menuDiv">
        <button
          onclick="mostrarMenu()"
          class="menuBotaoDesativo"
          id="menuBotao"
        >
          <img id="menuImagem" src="../../imgs/menu.png" />
        </button>
        <div id="departamentosDiv" class="departamentosDesativo">
          <div id="departamentos1" class="departamentosDivInterior">
            <p>Carros</p>
            <p>Tratores</p>
            <p>Caminhões</p>
            <p>Motocicleta</p>
            <p>Motonetas</p>
          </div>
          <div id="departamentos2" class="departamentosDivInterior"></div>
        </div>
      </div>

      <!-- Script dá as classes necessárias pros elementos necessários -->
      <!-- Basicamente desativando e ativando as classes que dão -->
      <!-- O visual para o menu de departamentos aparecer visível -->
      <script>
        function mostrarMenu() {
          document.getElementById("menuDiv").classList.toggle("menuAtivo");
          document
            .getElementById("menuBotao")
            .classList.toggle("menuBotaoDesativo");
          document
            .getElementById("departamentosDiv")
            .classList.toggle("departamentosDesativo");
        }
      </script>

      <h2 id="titulo">TODOS OS DEPARTAMENTOS</h2>
      <!-- Título usa proporção de fonte (em) métrica importante, usem muito -->
      <!-- Barra Simples: Bordas com radius, placeholder é o texto que aparece sempre -->
      <!-- Icone de pesquisa, só baixar da internet um icone, colocar no src -->
      <!-- Se for jpeg coloca mix-blend-mode: multiply que tira o fundo branco -->
      <!-- Colocar o cursor: pointer para parecer "clicável" -->
      <div id="barraPesquisaDiv">
        <!-- Div da barra de pesquisa é flex -->
        <!-- Usamos isso para botar o icone em posição absoluta -->
        <!-- Fácil guiar o ícone pro final pra ficar em cima da barra só usando -->
        <!-- justify-content: end na div -->
        <input
          type="text"
          name="text"
          class="barraPesquisa"
          placeholder="Pesquisar"
        />
        <img id="pesquisaIcone" src="../../imgs/lupa.png" />
      </div>

<!-- MENU DE PEDIDOS -->
      <div class="menuPedidos">
        <ul class="departamentosPedidos">
          <li onclick="toggleSubMenu('department1')"> <h2> PEDIDOS </h2> </li>
          <ul id="department1" class="sub-menu2">
            <li> Pedido 1 </li>
            <li> Pedido 3 </li>
            <li> Pedido 4 </li>
      </div>
      <script>
        function toggleSubMenu(departamentoId) {
          var subMenu = document.getElementById(departamentoId);
          if (subMenu.style.display === 'block') {
            subMenu.style.display = 'none';
          } else {
            subMenu.style.display = 'block';
          }
        }
      </script>
    <div id="entrar">
      <h2 id="entrarBotao"> <a href="../FormulariosLogin/sair.php">SAIR</a> </a> </h2>
    </div>
    </header>
    <!-- Section ajuda entender o seção do interior do site -->
    <!-- Funciona igual uma div -->
    <!-- Damos display flex para começarmos alinhar os elementos dentro -->
    <!-- Começamos a codificação dos filtros -->
  <section id="corpo">
  
   <!-- Começo dos produtos, saída do filtro -->
      <div id="tudoProdutos">
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Card com Imagem e Descrição</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
          <div class="certo"> 
        <?php
    $db = new mysqli('localhost', 'root', '', 'rsp_banco');
            
    // Verificar conexão
    if ($db->connect_error) {
      die('Falha na conexão com o banco de dados: ' . $db->connect_error);
    }
            // Criar consulta SQL para obter produtos
            $sql = "SELECT prd.id_produto, prd.img_produto, prd.descricao, prd.tipo_fabricante,
pdd.preco,prd.peca ,pdd.quantidade, pdd.codigo, pdd.dataProduto 
FROM pedido as pdd inner join produtos as prd
ON pdd.codigo_id = prd.id_codigo;" ;

# AS cria um apelido na coluna da tabela ex: produto as prd, pedido as pdd

#SELECT pdd.codigo,pdd.preco ,pr.nome_produto,pr.descricao
#FROM pedido as pdd, produtos as pr;

#SELECT id_produto, nome_produto,img_produto ,descricao, tipo_fabricante FROM produtos
#SELECT codigo,preco,quantidade FROM pedido
           
// "SELECT codigo, preco, quantidade FROM pedido"; 

            // Executar consulta e obter resultados
            $result = $db->query($sql);

// Verificar se há resultados
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $id_produto = $row['id_produto'];
      $product_image_name = $row['img_produto']; 
      $descricao = $row['descricao'];
      $tipo_fabricante = $row['tipo_fabricante'];
      $preco = $row['preco'];
      $quantidade = $row['quantidade'];
      $codigo = $row['codigo'];
      $dataProduto = $row['dataProduto'];
      $peca = $row['peca'];

 //// Determina o tipo de imagem (talvez você precise de uma detecção de tipo de imagem mais robusta)
 $finfo = finfo_open(FILEINFO_MIME_TYPE);
 $mimeType = finfo_buffer($finfo, $product_image_name);
 finfo_close($finfo);

 // Extraia o tipo de imagem do tipo MIME
 $imageType = explode('/', $mimeType)[1];

 //Crie uma fonte de imagem com base no tipo de imagem
 $imageSrc = "data:image/" . $imageType . ";base64," . $product_image_name;

echo "<div class='card1'>"; 
echo "<div class='content'>";
echo "<div class='title'><h3>$peca</h3></div>";
echo "<img id='image' src='$product_image_name' alt='Imagem do Produto'>";
echo "<div class='description'><p>$descricao</p></div>"; 
echo "<div class='description'><p>Fabricante: $tipo_fabricante</p></div>"; 
echo "<div class='description'><p>R$: $preco,00</p></div>"; 
echo "<div class='description'><p>Estoque: $quantidade</p></div>"; 
echo "<div class='description'><p>$dataProduto</p></div>"; 
echo " <button id='o' onclick='addToCart($id_produto)'>adicionar ao Carrinho</button>";
echo "</div>"; 
echo "</div>";  
echo "<br>";

  }
} else {
  echo "Nenhum produto encontrado no banco de dados.";
}

$db->close();
?>

</div>

<div class="pagination-container">
<ul class="pagination"></ul>
</div>
</div> 
</section>

    <footer id="footer">
      <div class="blocoContato">
        <img class="iconeContato" />
        <p class="textoContato">WHATSAPP</p>
      </div>
      <div class="blocoContato">
        <img class="iconeContato" />
        <p class="textoContato">ENDEREÇO</p>
      </div>
      <div class="blocoContato">
        <img class="iconeContato" />
        <p class="textoContato">DIREITOS AUTORAIS</p>
      </div>
      
    </footer>
  </body>
</html>