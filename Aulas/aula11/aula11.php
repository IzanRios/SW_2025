<?php
    include_once 'Produto.class.php';

    $produto1 = new Produto("Caneta", 2.50, 100);
    $produto1->mostrarDetalhes();
    echo "<hr>";
    $produto1->adicionarEstoque(20);
    $produto1->removerEstoque(10);
    $produto1->setPreco(2.80);
    $produto1->mostrarDetalhes();
    echo "<hr>";

    $produto2 = new Produto("Lápis", 1.00, 150);
    $produto2->mostrarDetalhes();
    echo "<hr>";
    $produto2->adicionarEstoque(20);
    $produto2->removerEstoque(10);
    $produto2->setPreco(1.50);
    $produto2->mostrarDetalhes();
?>