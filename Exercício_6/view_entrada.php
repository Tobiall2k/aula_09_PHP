<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Conversor de Temperatura</h1>
        <hr>
    </header>
    <main>
        <h2>Temperatura</h2>
        <form action="logic_controller.php" method="POST">
            <label for="celsius">Temperatura em Celsius:</label>
            <br>
            <input type="number" id="celsius" name="celsius" placeholder="Digite a temperatura em C°..." required>
            <br>
            <br>

            <button type="submit">Converter</button>

        </form>
    </main>
</body>
</html>