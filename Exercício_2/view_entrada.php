<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Calculadora Simples</h1>
        <hr>
    </header>
    <main>
        <form action="logica_controller.php" method="POST">
            <h2>Conta</h2>
            <label for="numero1">Número 1:</label>
            <br>
            <input type="number" id="numero1" name="numero1" placeholder="Digite o primeiro número...">
            <br>
            <br>

            <label for="numero2">Número 2:</label>
            <br>
            <input type="number" id="numero2" name="numero2" placeholder="Digite o segundo número..." required>
            <br>
            <br>

            <label for="">Selecione uma operação:</label>
            <select name="operacao" id="operacao">
                <option value="1241" selected disabled>Selecione</option>
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <br>
            <br>

            <button type="submit">Calcular</button>
        </form>
    </main>
</body>
</html>