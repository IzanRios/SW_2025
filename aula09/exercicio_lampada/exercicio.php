<?php
    include_once 'Lampada.class.php';

    $lamp1 = new Lampada();
    $lamp2 = new Lampada();


    $lamp1->Fabricante = "PHILIPS";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "Branca";

    $lamp2->Fabricante = "OSRAM";
    $lamp2->Tensao = 1220;
    $lamp2->Potencia = 30;
    $lamp2->Cor = "Azul";

    $lamp1->Ligar();
    $lamp1->MostrarDados();

    $lamp2->Desligar();
    $lamp2->MostrarDados();


?>