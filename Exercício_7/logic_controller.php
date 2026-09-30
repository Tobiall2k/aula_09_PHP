<?php

$nome = $_POST['nome'];
$salario_atual = $_POST['salario'];
$cargo = $_POST['cargo'];

switch ($cargo) {
    case "estagiario":
        $aumento = $salario_atual * 0.1;
        break;
    case "assistente":
        $aumento = $salario_atual * 0.08;
        break;
    case "analista":
        $aumento = $salario_atual * 0.05; 
        break;    
}

$novo_salario = $salario_atual + $aumento;

require_once "view_saida.php";
?>