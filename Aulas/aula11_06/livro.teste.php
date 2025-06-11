<?php
    include_once 'Livro.class.php';

    $livro = new Livro("1984", "George Orwell");
    echo $livro->apresentarDados() . "\n";
    echo "<hr>";
    echo $livro->exibirStatus() . "\n";
    echo "<hr>";
    $livro->alterarDisponibilidade(false);
    echo $livro->exibirStatus();
    echo "<hr>";
?>