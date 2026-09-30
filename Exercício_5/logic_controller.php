<?php

$nome_cliente = $_POST['nome_cliente'];
$nome_produto = $_POST['nome_produto'];
$preco_produto = $_POST['preco_produto'];
$quantidade = $_POST['quantidade'];

$subtotal = $preco_produto * $quantidade;

if ($subtotal >= 200) {
    $desconto = $subtotal * 0.1;
} else {
    $desconto = $subtotal * 0;
}

$total = $subtotal - $desconto;

require_once "view_saida.php"
?>
