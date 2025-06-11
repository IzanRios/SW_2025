<?php
    include_once 'Retangulo.class.php';

    $retangulo = new Retangulo(5, 10);
    echo "Área: " . $retangulo->calcularArea() . "\n";
    echo "<hr>";
    echo "Perímetro: " . $retangulo->calcularPerimetro();
    echo "<hr>";
?>