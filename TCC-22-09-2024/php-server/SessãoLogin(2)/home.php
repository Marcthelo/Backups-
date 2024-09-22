<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RSP - Página Inicial </title>
    <!--LINKS INICIO-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <?php 
    session_start();
    ?>
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

  #carrinhoIcone {
    width: 3.5em;
    height: 3.5em;
    mix-blend-mode: multiply;
    cursor: pointer;
  }

  /* O corpo é nossa flex que ajusta os elementos do */
  /* interior da página. */
  /* Podemos já também alinhar os itens no centro */
  /* Também colocamos uma altura mínima de 85vh, pra cobrir o resto da página */
  /* Mas isso não restringe que ele ajuste seu tamanho para ficar maior se */
  /* necessário, gap em 5em define um espaço entre cada elemento */
  #corpo {
    min-height: 85vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    background-color: #d8d8d8;
    padding: 5em 0;
    gap: 5em;
    width: 100%;
    max-width: 100vw;
    min-width: 1200px;
  }

  /* Uma div para o carrosel e o que mostra a imagem atual */
  /* Como carroselDiv é flex column fica fácil ficar vertical bonito */
  /* Alinhamos no centro pra deixar o negocio da imagem atual no centro */
  #carroselDiv {
    display: flex;
    flex-direction: column;
    width: 88%;
    height: 24em;
    align-items: center;
  }

  /* Queremos que as imagems fiquem scrollando em horizontal */
  /* Botamos flex row e dizemos pras imagens tomar toda largura do carrosel */
  /* Com o overflow hidden, as imagens que vão pra fora da div do carrosel  */
  /* não aparecem mais. Essa é a mágica do carrosel */

  #carrosel {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 90%;
    overflow: hidden;
  }

  .carroselImagem {
    width: 100%;
  }

  #carroselPaginas {
    width: fit-content;
    height: 10%;
    align-items: center;
    display: flex;
    flex-direction: row;
    gap: 1em;
  }

  .carroselPaginaIndicador {
    width: 1em;
    height: 80%;
    border-radius: 1em;
    background-color: rgba(128, 128, 128, 0.511);
    cursor: pointer;
    transition: ease-in-out 0.2s;
  }

  .carroselPaginaIndicadorAtivo {
    background-color: white;
  }

  #veiculosDiv {
    display: flex;
    flex-direction: row;
    width: 90%;
    padding: 1.5rem 0;
    height: fit-content;
    overflow-x: auto;
    gap: 4rem;
  }

  .veiculoCirculo {
    display: flex;
    flex-shrink: 0;
    margin: auto;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 13rem;
    width: 13rem;
    background-color: white;
    border-radius: 50%;
    cursor: pointer;
  }

  /* Aqui tem o mesmo efeito que tinha no de antes */
  /* Só com efeito de clique agora também e transição para suavizar */
  .veiculoCirculo:hover {
    background-color: rgba(255, 0, 0, 0.7);
    box-shadow: 0 0 20px 2px black;
    transition: ease-in-out 0.2s;
  }

  .veiculoCirculo:active {
    background-color: rgba(255, 0, 0, 0.2);
  }

  .veiculoImagem {
    width: 60%;
    height: fit-content;
  }

  .veiculoDescricao {
    font-size: 1.5em;
  }

  /* Rodapé igual de vocês, mas agora vamos usar justify-content */
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

  #sobreDiv {
    display: flex;
    flex-direction: column;
    gap: 1em;
    width: 100%;
  }

  #sobreTitulo {
    font-size: 3em;
    margin-left: 1em;
    align-self: flex-start;
    font-weight: bold;
  }

  #sobreTexto {
    display: flex;
    flex-direction: row;
    height: 30vh;
    width: 80%;
    background-color: rgb(255, 118, 118);
    border-top-right-radius: 2.5em;
    border-bottom-right-radius: 1em;
    justify-content: start;
    align-self: flex-start;
  }

  .aboutBloco {
    width: 80%;
    height: 30vh;
    position: absolute;
    border-top-right-radius: 2.5em;
    border-bottom-right-radius: 1em;
    box-shadow: 5px 11px 20px black;
  }

  #sobreTextoSecundario {
    position: absolute;
    height: 28vh;
    width: 79%;
    background-color: rgb(255, 0, 0);
  }

  #sobreTextoTerciario {
    width: 78%;
    height: 26vh;
    position: absolute;
    background-color: white;
    font-size: 1.5em;
  }

  #sociosTitulo {
    font-size: 5em;
    font-weight: normal;
  }

  #sociosDiv {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    width: 90%;
    height: fit-content;
  }

  .sociosItem {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: fit-content;
    height: fit-content;
    flex-shrink: 0;
    gap: 2rem;
  }

  .sociosCirculo {
    border-radius: 50%;
    background-color: #e04c2f;
    box-shadow: 0.5rem 0.5rem 7px black;
    flex-grow: 2;
    width: 13rem;
    height: 13rem;
  }

  .sociosNome {
    flex-grow: 1;
    font-size: 2rem;
  }

  #colaboradoresTitulo {
    font-size: 5em; /* Em é uma métrica que é equivalente ao tamanho da fonte do elemento em específico, ou seja, se você mudou o tamanho da fonte, o em vai seguir esse tamanho :3 */
    font-weight: normal;
  }

  ::-webkit-scrollbar {
    width: 6px;
  }

  ::-webkit-scrollbar-track {
    background: none;
  }

  ::-webkit-scrollbar-thumb {
    background: #888888;
    border-radius: 1em;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  .colaboradoresDiv {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    width: 90%;
    height: fit-content;
    overflow-x: hidden;
    gap: 9rem; /* Rem é uma métrica que é equivalente ao tamanho original da fonte do elemento */
  }

  .colaboradoresDiv:hover {
    overflow-x: auto;
  }

  .colaboradoresItem {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: fit-content;
    height: fit-content;
    flex-shrink: 0;
    gap: 2rem;
  }

  .colaboradoresCirculo {
    border-radius: 50%;
    background-color: #ff937d;
    box-shadow: 0.5rem 0.5rem 7px black;
    flex-grow: 2;
    width: 13rem;
    height: 13rem;
  }

  .colaboradoresNome {
    flex-grow: 1;
    font-size: 2rem;
  }

  @media screen and (max-width: 1000px) {
    #sociosDiv {
      gap: 9rem;
      justify-content: space-around;
      overflow-x: auto;
    }
  }

  #cardsDiv {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    width: 90%;
    height: fit-content;
    margin-top: 12rem;
  }

  .card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 30%;
    gap: 3rem;
  }

  .cardTitulo {
    font-size: 5em;
    font-weight: normal;
  }

  .cardTexto {
    background-color: white;
    border: 4px solid gray;
    width: 100%;
    height: 40rem;
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

  .corB {
    text-decoration: none;
    color: rgb(255, 255, 255);
  }

  .corA {
    color: #000000;
    text-decoration: none;
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
#ft{
width:  140px;
height: 90px;
}
</style>
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <!--LINKS FIM-->
  </head>
  <body>

    <!-- Cabeçalho -->
    <header>
      <?php
      if ((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['cnpj'])) and (!isset($_SESSION['senha'])) and (!isset($_SESSION['email'])) and (!isset($_SESSION['nome']))) {
        unset($_SESSION['cpf']);
        unset($_SESSION['cnpj']);
        unset($_SESSION['senha']);
        unset($_SESSION['email']);
        unset($_SESSION['nome']);
      }

      $logado = $_SESSION['nome'];
      ?>
      <!-- Header em Flex Display (Elementos em Ordem e Blocos) -->
      <div id="logo"><img id="ft" src="../../imgs/rsp2.png" alt="Foto-Logo" /></div>
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
            <p> <a href="PRODUTOSHT.php" id="corA" class="corA"> Carros </a></p>
           <a  id="corA" class="corA" href="PRODUTOSHT.php"><p>Tratores</p></a> 
           <a  id="corA" class="corA" href="PRODUTOSHT.php"><p>Caminhões</p></a>
           <a  id="corA" class="corA" href="PRODUTOSHT.php"><p>Motocicleta</p></a> 
           <a  id="corA" class="corA" href="PRODUTOSHT.php"><p>Motonetas</p></a> 
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
            <li> Pedido 2 </li>
            <li> Pedido 3 </li>
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
          <?php 
      echo "<p> <strong>Bem Vindo(a)<strong/> <u>$logado</u></p>";
      ?>
    <div id="entrar">
      <h2 id="entrarBotao"> <a href="../../php-server/FormulariosLogin/sair.php" id="corB" class="corB"> SAIR  </a> </h2>
    </div>
      
      <!-- Abrindo o segundo menu (pedidos), explicado o funcionamento acima -->
 
    </header>
    <!-- Section ajuda entender o seção do interior do site -->
    <!-- Funciona igual uma div -->
    <!-- Damos display flex para começarmos alinhar os elementos dentro -->
    <!-- Colocamos flex-direction em column, queremos que a ordem dos elementos seja em vertical (Cima pra baixo) -->
    <section id="corpo">
      <div id="carroselDiv">
        <div id="carrosel">
          <img class="carroselImagem" src="../../imgs/carrosel_tudo.png" />
          <img class="carroselImagem" src="../../imgs/carrosel_tudo.png" />
          <img class="carroselImagem" src="../../imgs/carrosel_tudo.png" />
        </div>
        <div id="carroselPaginas"></div>
      </div>

      <!-- Podemos colocar mais uma div em flex para alinhar em flex-direciton row -->
      <!-- Agora podemos colocar os veículos em horizontal fácilmente -->
      <div id="veiculosDiv">
        <div class="veiculoCirculo">
          <img class="veiculoImagem" src="../../imgs/automoveis.png" />
          <p class="veiculoDescricao"> Automovéis </p>
        </div>
        <div class="veiculoCirculo">
          <img class="veiculoImagem" src="../../imgs/caminhoes.png" />
          <p class="veiculoDescricao">Caminhões</p>
        </div>
        <div class="veiculoCirculo">
          <img class="veiculoImagem" src="../../imgs/tratores.png" />
          <p class="veiculoDescricao">Tratores</p>
        </div>
        <div class="veiculoCirculo">
          <img class="veiculoImagem" src="../../imgs/motocicleta.png" />
          <p class="veiculoDescricao">Motocicleta</p>
        </div>
        <div class="veiculoCirculo">
          <img class="veiculoImagem" src="../../imgs/motonetas.png" />
          <p class="veiculoDescricao">Motonetas</p>
        </div>
      </div>

      <h2 id="sobreTitulo">SOBRE NÓS</h2>
      <div id="sobreTexto">
        <div id="sobreTextoSecundario" class="aboutBloco"></div>
        <div id="sobreTextoTerciario" class="aboutBloco">
          Recondionadora de Peças São Paulo, uma empresa dedicada à remanufatura de peças automotivas, com foco na excelência, sustentabilidade e inovação. Fundada com a missão de oferecer alternativas econômicas e ecologicamente responsáveis aos nossos clientes, nossa empresa se orgulha de ser líder no setor de recondicionamento de peças.
        </div>
      </div>
      <h2 id="sociosTitulo">SÓCIOS</h2>
      <div id="sociosDiv">
        <div class="sociosItem">
          <div class="sociosCirculo"></div>
          <p class="sociosNome">SÓCIO 1</p>
        </div>
        <div class="sociosItem">
          <div class="sociosCirculo"></div>
          <p class="sociosNome">SÓCIO 2</p>
        </div>
        <div class="sociosItem">
          <div class="sociosCirculo"></div>
          <p class="sociosNome">SÓCIO 3</p>
        </div>
        <div class="sociosItem">
          <div class="sociosCirculo"></div>
          <p class="sociosNome">SÓCIO 4</p>
        </div>
      </div>

      <h2 id="colaboradoresTitulo">COLABORADORES</h2>
      <div class="colaboradoresDiv">
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 1</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 2</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 3</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 4</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 5</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 6</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 7</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 8</p>
        </div>
        <div class="colaboradoresItem">
          <div class="colaboradoresCirculo"></div>
          <p class="colaboradoresNome">COLABORADOR 9</p>
        </div>
      </div>
      <div id="cardsDiv">
        <div class="card">
          <h3 class="cardTitulo">MISSÃO</h3>
          <div class="cardTexto"> <h4> " Prestar assistência no ramo automotivo, através do recondicionamento de peças, 
            garantindo o seu perfeito funcionamento, maior durabilidade, e segurança em parcerias com nossos
             clientes e colaboradores. " </h4>
          </div>
        </div>
        <div class="card">
          <h3 class="cardTitulo">VISÃO</h3>
          <div class="cardTexto"> <h4> " Nossa visão é sermos reconhecidos como líderes globais em soluções sustentáveis para a indústria automotiva, redefinindo padrões de qualidade e inovação no recondicionamento de peças. " </h4></div>
        </div>
        <div class="card">
          <h3 class="cardTitulo">PROCESSO</h3>
          <div class="cardTexto"> <h4> "Seguimos um processo rigoroso e detalhado para garantir que cada peça remanufaturada atenda aos mais altos padrões de qualidade e desempenho. Nosso processo de remanufatura pode ser resumido nas seguintes etapas. "</h4></div>
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
<script>
  // Aqui se define variáveis úteis
  // A div que contém os bloquinhos que indicam a página atual do carrosel
  const carroselPaginas = document.getElementById("carroselPaginas");
  // Cria um bloquinho que indica a página atual, estes bloquinhos vai serão divs
  const paginaIndicador = document.createElement("div");
  // Pega a div do carrosel em si
  const carrosel = document.getElementById("carrosel");
  // Pega as imagens que estão dentro da div do carrosel
  const carroselImages = document.getElementsByClassName("carroselImagem");

  // Criar indicadores da página atual ==
  // Dá a classe para o bloquinho que indica a página (é uma classe de css normal lá em cima ^^)
  paginaIndicador.classList.add("carroselPaginaIndicador");
  // Cria clones do bloquinho criado, igual a quantidade de imagens no carrosel (carroselImages.length)
  // Adiciona eles como filhos do carroselPaginas, ou seja, estarão dentro da div dos bloquinhos carroselPaginas
  // OBS: Quando você cria um elemento no javascript (createElement()) ele não aparece diretamente no html!
  // é necessário especificar de quem ele é filho (qual elemento ele estará dentro, 'elemento.appendChild(filho)')
  for (let i = 0; i < carroselImages.length; i++) {
    carroselPaginas.appendChild(paginaIndicador.cloneNode(true));
  }
  // Por fim, PEGA todos os bloquinhos criados numa variável lista só.
  const paginaIndicadores = document.getElementsByClassName(
    "carroselPaginaIndicador"
  );
  // Toggle no primeiro bloquinho (0) pois a primeira imagem que aparece é a primeira (0) também
  paginaIndicadores[0].classList.toggle("carroselPaginaIndicadorAtivo");
  // Fazer scrollagem automática
  // Diz que a imagem que mostra atualmente é a primeira (0)
  let currentImage = 0;
  // Cria um loop que executa a cada intervalo de 4 segundos. (4000 porque está em milisegundos)
  // () = > {} é um jeito fácil de criar uma função no javascript sem precisar de function, apenas ()
  // Se pode atribuir a uma váriavel, tipo myFunction = () => {//fazalgo...} ou só passar como parâmetro
  // tipo como passamos em setInterval(), pois é a função que executa a cada intervalo de 4 segundos
  setInterval(() => {
    // Pega as dimensões do carrosel e sua posição de uma imagem no carrosel, tudo dentro dessa boundBox
    // É importante que esta linha esteja dentro do intervalo pois a posição e dimensão muda toda hora
    // Pega sempre da imagem 0 pois todas imagens tem a mesma largura e altura no nosso css, ent não faz diferença
    const boundBox = carroselImages[0].getBoundingClientRect();
    // Aumenta a imagem atual em 1 (se antes era 0, a primeira, agora é a segunda, 2)
    currentImage += 1;
    // Se a imagem atual é igual ao tamanho da lista das imagens do carrosel, quer dizer que este contador
    // currentImage passou da quantidade de imagens que existem
    if (currentImage === carroselImages.length) {
      // Fazemos a imagem atual ser a primeira (0) denovo.
      currentImage = 0;
      // Fazemos o último bloquinho indicador levar toggle da classe que deixa ele ativo, pois sabemos
      // que já que voltamos pro inicio, o último ativo era o último bloquinho
      paginaIndicadores[paginaIndicadores.length - 1].classList.toggle(
        "carroselPaginaIndicadorAtivo"
      );
      // Fazemos o bloquinho indicador da primeira imagem ter o css de ativo
      paginaIndicadores[0].classList.toggle("carroselPaginaIndicadorAtivo");
      // Fazemos o carrosel scrollar para o ínicio (posição 0 na esquerda), logo primeira imagem
      // Behavior smooth deixa a animação fluída, em vez de ir direto sem efeito/transição
      carrosel.scrollTo({ left: 0, behavior: "smooth" });
    } else {
      // Aqui só fazemos o bloquinho anterior (currentImage - 1) perder o css de ativo que ele tem
      paginaIndicadores[currentImage - 1].classList.toggle(
        "carroselPaginaIndicadorAtivo"
      );
      // Aqui fazemos o bloquinho da imagem atual ganhar o css de ativo
      paginaIndicadores[currentImage].classList.toggle(
        "carroselPaginaIndicadorAtivo"
      );
      // Scrollamos o carrosel em eixo horizontal equivalente a largura da imagem, ou seja
      // o suficiente para scrollar o suficiente até a imagem anterior sumir a nova estar no lugar
      carrosel.scrollBy({ left: boundBox.width, behavior: "smooth" });
      // Nota: Passa-se em scrollBy() (a função de scrollar) um objeto com os atributos da 'scrollação'
      // Um objeto é um conjunto de chaves e valores dentro de chaves { }
      // Objetos tem formatos diferentes, no caso do scrollBy ele tem vários, como left (scrollar horizontal)
      // top (scrollar vertical), behavior (como vai ser o efeito do scroll), etc.
      // Só passamos left e behavior porque é o que precisamos.
    }
  }, 4000); // Lembra, <-- milisegundos
</script>