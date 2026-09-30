<?php

$n1 = (float) $_POST['numero1'];
$n2 = (float) $_POST['numero2'];
$operacao = $_POST['operacao'];

switch ($operacao) {
    case "soma":
        $resultado = $n1 + $n2;
        break;
    case "subtracao":
        $resultado = $n1 - $n2;
        break;
    case "multiplicacao":
        $resultado = $n1 * $n2;
        break;
    case "divisao":
        if ($n2 === 0) {
            $resultado = "Não é possível dividir por 0";
        } else {
            $resultado = $n1 / $n2;
        }
        break;
}
require_once "view_saida.php";
?>

