<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $media = ($nota1 + $nota2) / 2;

    if ($media < 5) {
        $situacao = "Reprovado";
    } elseif ($media < 7) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Aprovado";
    }

    require_once "view_saida.php"

?>