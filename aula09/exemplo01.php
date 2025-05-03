<?php
    include_once 'pessoa.class.php';

    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    //var_dump($fulano);

    $fulano->Nome = "FULANO DA SILVA";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "CICLANO DA SILVA";
    $ciclano->Peso = 70;
    $ciclano->Altura = 1.50;

    $fulano->MostrarDados();
    $ciclano->MostrarDados();
    $ciclano->Apresentar();


?>