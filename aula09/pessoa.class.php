<?php
     class Pessoa{
        public $Nome;
        public $Peso;
        public $Altura;

        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O peso é: " . $this->Peso . "<br>";
            echo "A altura é: " . $this->Altura . "<br>";
            echo "<hr>";
        
        }
        public function Apresentar(){
            echo "Oi meu nome é " . $this->Nome . ", meu peso é " . $this->Peso ." e minha altura é " . $this->Altura;
            
        } 
      
    }
    


?>