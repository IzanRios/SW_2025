<?php
class Carro {

    public $marca;
    public $modelo;
    public $combustivel;
    public $portas;
    public $capacidade_tanque;

   
    public function MostrarDados() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Combustível: " . $this->combustivel . "<br>";
        echo "Portas: " . $this->portas . "<br>";
        echo "Capacidade do tanque: " . $this->capacidade_tanque . "<br>";
    }
}

?>