<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Loja Brás</h1>
        <hr>
    </header>
    <main>
        <h2>Cliente</h2>
        <form action="logic_controller.php" method="POST">
            <label for="nome">Nome do Cliente:</label>
            <br>
            <input type="text" id="nome_cliente" name="nome_cliente" placeholder="Digite seu nome...">
            <br>
            <br>

            <label for="nome_produto">Nome do Produto</label>
            <br>
            <input type="text" id="nome_prouto" name="nome_produto" placeholder="Digite o nome do produto...">
            <br>
            <br>

            <label for="preco_produto">Preço do Produto:</label>
            <br>
            <input type="number" id="preco_produto" name="preco_produto" placeholder="Digite o preço do produto...">
            <br>
            <br>

            <label for="quantidade">Quantidade:</label>
            <br>
            <input type="number" id="quantidade" name="quantidade" placeholder="Digite a quantidade do produto...">
            <br>
            <br>

            <button type="submit">Finalizar compra</button>

        </form>
    </main>
</body>
</html>