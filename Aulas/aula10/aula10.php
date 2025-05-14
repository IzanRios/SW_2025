<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Ízan Rios";
    $conta1->Cpf = "474.968.688-33";

    $conta1->MostrarSaldo();
    echo "<hr>";

    echo $conta1->Depositar(1500);
    echo "<hr>";

    $conta1->MostrarSaldo();
    echo "<hr>";

    echo $conta1->Sacar(700);
    echo "<hr>";

    $conta1->MostrarSaldo();
    echo "<hr>";


?>