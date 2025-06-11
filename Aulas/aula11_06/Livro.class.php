<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor, $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;
    }

    public function apresentarDados() {
        return "Título: {$this->titulo}, Autor: {$this->autor}";
    }

    public function alterarDisponibilidade($estado) {
        $this->disponivel = $estado;
    }

    public function exibirStatus() {
        $status = $this->disponivel ? 'Disponível' : 'Emprestado';
        return "{$this->titulo} - {$status}";
    }
}
?>