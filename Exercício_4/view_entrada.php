<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diârio Eletrônico</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Diário Eletrônico</h1>
        <hr>
    </header>
    <main>
        <h2>Aluno</h2>
        <form action="logic_controller.php" method="POST">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required>
            <br>
            <br>

            <label for="nota1">Nota 1:</label>
            <br>
            <input type="number" id="nota1" name="nota1" placeholder="Digite a primeira nota...">
            <br>
            <br>

            <label for="nota2">Nota 2:</label>
            <br>
            <input type="number" id="nota2" name="nota2" placeholder="Digite a segunda nota...">
            <br>
            <br>

            <button type="submit">Gerar relatório</button>
        </form>
    </main>
</body>
</html>