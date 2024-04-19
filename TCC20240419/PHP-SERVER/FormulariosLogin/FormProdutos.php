<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <fieldset>
        <legend><h2><b>Produtos</b></h2></legend>
        <form method="POST" action="FormProdutos.php">
                <div class="inputBox">
                    <input type="radio" name="automoveis" id="carro" value="carro" required>
                    <label for="carro">Carro</label>
                    <input type="radio" name="automoveis" id="trator" value="trator" required>
                    <label for="trator">Trator</label>
                    <br>
                    <input type="radio" name="automoveis" id="caminhao" value="caminhao" required>
                    <label for="caminhao">Caminhão</label>
                    <input type="radio" name="automoveis" id="moto" value="moto" required>
                    <label for="moto">Moto</label>
                    <br>
                    <input type="radio" name="automoveis" id="motoneta" value="motoneta" required>
                    <label for="motoneta">Motoneta</label>
                </div>
                <br>
                <div class="inputBox">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="inputProduto" requireda />
                </div>
                <br>
                <div class="inputBox">
                    <label for="class">Classificação</label>
                    <input type="text" name="class" id="class" class="inputProduto" required />
                </div>
                <br>
                <div class="inputBox">
                    <label for="peca">Peça</label>
                    <input type="text" name="peca" id="peca" class="inputProduto" required />
                </div>
                <br>
                <div class="inputBox">
                    <label for="volts">Voltagem</label>
                    <input type="text" name="volts" id="volts" class="inputProduto" required />
                </div>
                <br>
                <div class="inputBox">
                    <label for="fab">Fabricante</label>
                    <input type="text" name="fab" id="fab" class="inputProduto" required />
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="cadastrar" />
        </form>
    </fieldset>
</body>
</html>