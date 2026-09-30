<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diârio Eletrônico</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Relatório Escolar</h1>
        <hr>
    </header>
    <main>
        <p>Aluno: <?=$nome?></p>
        <p>Nota 1: <?=number_format($nota1, 2, ",", ".")?></p>
        <p>Nota 2: <?=number_format($nota2, 2, ",", ".")?></p>
        <p>Média: <?=number_format($media, 2, ",", ".")?></p>
        <p>Situação: <?=$situacao?></p>
    </main>
</body>
</html>