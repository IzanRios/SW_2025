<?php
    include_once 'Funcionario.class.php';

    $funcionario = new Funcionario("Maria", 2500);
    echo $funcionario->exibirInformacoes() . "\n";
    echo "<hr>";
    $funcionario->aumentarSalario(10);
    echo $funcionario->exibirInformacoes();
    echo "<hr>";
?>