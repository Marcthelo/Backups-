
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
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
      #imgFT{
        width: 250px;
        height: 135px;
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

      #entrarBotao {
        width: fit-content;
        height: fit-content;
        margin: 0;
        font-size: 1.6em;
        cursor: pointer;
      }
      a{
        color: white;
        text-decoration: none;
      }
      #PedidoBotao{
        width: fit-content;
        height: fit-content;
        margin: 0;
        font-size: 1.6em;
        cursor: pointer;
      }
      #PedidoBotao:hover{
        color: rgb(191, 191, 191);    
      }
      #PedidoBotao:active{
        color: rgb(191, 191, 191);
      }
      #entrarBotao:hover {
        color: rgb(191, 191, 191);
      }

      #entrarBotao:active {
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

      #carrinhoIcone {/**/
        width: 3.5em;
        height: 3.5em;
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
        background-color: #b1b1b1;
        padding: 5em 0;
        gap: 5em;
      }
      * {
        padding: 0;
        margin: 0;
      }

      body {
        width: 100%;
      }
      /*Sessão Corpo*/

      
      /*Footer*/
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
      #zape{
        height: 50px;
        width: 50px;
      }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imgs/rsp2.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <title>Produtos</title>
</head>
<?php 
//FILTRAR PRODUTOS
$Carro = 
$Trator
$Caminhão
$Moto
$Motoneta

?>
<body>
    <header>
        <!-- Header em Flex Display (Elementos em Ordem e Blocos) -->
        <div id="logo"><img src="../../imgs/rsp2.png" alt="Foto-Logo" id="imgFT" /></div>
        <!-- Logo fit-content só seu conteúdo dentro -->

       <!-- 
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
              <p>Pneus</p>
              <p>Jorge</p>
            </div>
            <div id="departamentos2" class="departamentosDivInterior"></div>
          </div>
        </div>-->

        <!-- Script dá as classes necessárias pros elementos necessários -->
        <!-- Basicamente desativando e ativando as classes que dão -->
        <!-- O visual para o menu de departamentos aparecer visível -->
        <!--toggle - alternar -->
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
  
       <!--  <h2 id="titulo">TODOS OS DEPARTAMENTOS</h2> -->

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
        <h2 id="entrarBotao"><a href="../FormulariosLogin/home.php">Entrar</a></h2> <!--Exemplo quando o clinete estiver logado--> 
        <h2 id="PedidoBotao"><a href="../FormulariosLogin/FormProdutos.php">Cadastrar</a></h2>
      </header>
      <!--Corpo-->
      <section id="corpo">

      </section>
      <!--Corpo - fim-->
      <footer id="footer">
        <div class="blocoContato">
          <a href="https://wa.me/45998135467"><p>WHATSAPP</p></a>
        </div> 
        <div class="blocoContato">
          <img class="iconeContato" />
          <p class="textoContato">ENDEREÇO</p>
        </div>
        <div class="blocoContato">
          <img class="iconeContato" />
          <p class="textoContato">DIREITOS AUTORAIS &copy;</p>
        </div>
      </footer>
</body>
</html>
<script>
  document.getElementById('category-filter').addEventListener('submit', function(event) {
  event.preventDefault();

  var category = this.category.value;

  // Make an AJAX request to the server to get the filtered results
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'filter.php?category=' + category, true);
  xhr.onload = function() {
    if (this.status === 200) {
      // Update the page with the filtered results
      var results = JSON.parse(this.responseText);
      updateResults(results);
    }
  };
  xhr.send();
});
function updateResults(results) {
  // Clear the existing results
  var resultsContainer = document.getElementById('results');
  resultsContainer.innerHTML = '';

  // Add the new results
  results.forEach(function(result) {
    var resultElement = document.createElement('div');
    resultElement.className = 'result';
    resultElement.innerHTML = '<h2>' + result.title + '</h2><p>' + result.description + '</p>';
    resultsContainer.appendChild(resultElement);
  });
}
</script>