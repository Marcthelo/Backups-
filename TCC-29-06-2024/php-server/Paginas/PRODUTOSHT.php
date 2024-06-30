<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RSP - PRODUTOS X </title>
    <!--LINKS INICIO-->
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
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
        min-height: 85vh;
        width: 100%;
        background-color: #d8d8d8;
        padding: 5em 0;
        gap: 5em;
        width: 100%;
        max-width: 100vw;
        display: flex;
        min-width: 1200px;
      }

  /* PRODUTOS NOVO COM O CODIGO COLADO */

  .card {
    width: 350px; /* Ajuste a largura do card */
    height: 250px;
    margin: 20px auto; /* Centraliza o card na página */
    background-color:  #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Adiciona sombra ao card */
    border-radius: 10px; /* Arredonda os cantos do card */
}

.card-content {
    padding: 20px;
}

.card img {
    width: 100%; /* Imagem ocupa toda a largura do card */
    height: auto; /* Mantém a proporção da imagem */
    border-radius: 10px 10px 0 0; /* Arredonda os cantos superiores da imagem */
}

h3 { /*TÍTULO / NOME DO PRODUTO */
    font-size: 20px; /* Ajuste o tamanho do título */
    margin-bottom: 10px;
}

p { /* Descriçao do produto */ 
    font-size: 14px; /* Ajuste o tamanho do texto */
    line-height: 1.5; /* Aumenta o espaçamento entre as linhas de texto */
}

button {
    background-color: #ff0000; /* Cor do botão */
    color: #fff; /* Cor do texto do botão */
    border: none; /* Remove a borda do botão */
    align-items: center;
    text-align: center;
    padding: 10px 20px; /* Ajuste o padding do botão */
    border-radius: 5px; /* Arredonda os cantos do botão */
    width: 320px;
    margin-top: 30%;
    margin-left: 4%;
    cursor: pointer; /* Exibe o cursor de ponteiro ao passar o mouse sobre o botão */
    transition: background-color 0.3s ease; /* Adiciona transição ao clique */
}

button:hover {
    background-color: #720000; /* Cor do botão ao passar o mouse */
}
/* Filtros codificação CSS */

#filtros {
  display: flex; /* Organizar os menus suspensos em linha */
  flex-direction: column; /* Posicionar os menus suspensos um abaixo do outro */
  margin: 20px;
}

#filtros label {
  margin-bottom: 5px;
  display: block;
}

#filtros select {
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 150px; /* Definir a largura dos menus suspensos */
}
#ft{
  width:  140px;
  height: 90px;
}
.corA {
        color: #000000;
        text-decoration: none;
      }
    </style>
    <!--STYLE FIM-->
  </head>
  <body>
    <!-- Cabeçalho -->
    <header>
      <!-- Header em Flex Display (Elementos em Ordem e Blocos) -->
      <div id="logo"> <a href="home.php"> <img id="ft" src="../../imgs/rsp2.png" alt="Foto-Logo" /> </a> </div>
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
            <p><a href="PRODUTOSHT.php" id="corA" class="corA"> Carros </a></p>
            <p>Tratores</p>
            <p>Pneus</p>
            <p>Jorge</p>
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
      <h2 id="entrarBotao"> <a href="../../php-server/FormulariosLogin/Login.php"> ENTRAR  </a> </h2>
    </div>
    </header>
    <!-- Section ajuda entender o seção do interior do site -->
    <!-- Funciona igual uma div -->
    <!-- Damos display flex para começarmos alinhar os elementos dentro -->
    <!-- Começamos a codificação dos filtros -->
  <section id="corpo">
    <div id="filtros">
      <label for="dropdownAutomovel">Tipo de Veículo:</label>
      <select id="dropdownAutomovel">
      </select>
    
      <label for="dropdownFabricante">Fabricante:</label>
      <select id="dropdownFabricante">
      </select>
    
      <label for="dropdownVolts">Voltagem:</label>
      <select id="dropdownVolts">
      </select>
    </div>
    

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
          <div class="meucard">
            <div class="card">
                <a href="product-details.php?id=<?php echo $produto['id_produto']; ?>">
                    <img id="image" src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                </a>
                <h3><?php echo $produto['nome']; ?></h3>
                <p>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                <p><?php echo $produto['categoria']; ?></p>
                <p>Estoque: <?php echo $produto['estoque']; ?></p>
                <p>ID: <?php echo $produto['id_produto']; ?></p>
                <a href="carrinho.php?action=add&id=<?php echo $produto['id_produto']; ?>">
                    <button class="botao-comprar">Adicionar aos Pedidos</button>
                </a>
            </div>
        </div>
        <?php

    $conn = null;
    ?>
</div>
</div>

<div class="pagination-container">
<ul class="pagination"></ul>
</div>
        </body>
        </html>
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

