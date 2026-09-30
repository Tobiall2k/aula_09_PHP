<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>
<body>
    <header>
        <h1 style="text-align:center">Climin</h1>
        <hr>
    </header>
    <main>
        <h2>Funcionário(a)</h2>
        <form action="logic_controller.php" method="POST">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">
            <br>
            <br>

            <label for="salario">Salário atual:</label>
            <br>
            <input type="number" id="salario" name="salario" placeholder="Digite seu nome...">
            <br>
            <br>

            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo">
                <option value="" selected disabled>Selecione</option>
                <option value="estagiario">Estagiário</option>
                <option value="assistente">Assistente</option>
                <option value="analista">Analista</option>
            </select>
            <br>
            <br>
            <button type="submit">Gerar relatório</button>
        </form>
    </main>
</body>
</html>