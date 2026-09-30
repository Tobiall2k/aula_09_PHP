<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Compra #1924128</h1>
        <hr>
    </header>
    <main>
        <h2>Nome: <?=$nome_cliente?></h2>
        <p>Produto: <?=$nome_produto?></p>
        <p>Quantidade: <?=$quantidade?></p>
        <p>Preço Unitário: <?=number_format($preco_produto,2,",",".")?></p>
        <p>Subtotal: <?=number_format($subtotal,2,",",".")?></p>
        <p>Desconto: <?=number_format($desconto,2,",",".")?></p>
        <p>Total: <?=number_format($total,2,",",".")?></p>
    </main>
</body>
</html>