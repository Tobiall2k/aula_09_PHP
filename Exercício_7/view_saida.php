<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Funcionários</h1>
        <hr>
    </header>
    <main>
        <h2><?=$nome?></h2>
        <p>Cargo: <?=$cargo?></p>
        <p>Salário atual: R$<?=number_format($salario_atual, 2, ",", ".")?></p>
        <p>Aumento: R$<?=number_format($aumento, 2, ",", ".")?></p> 
        <p>Novo salário: R$<?=number_format($novo_salario, 2, ",", ".")?></p>
    </main>
</body>
</html>