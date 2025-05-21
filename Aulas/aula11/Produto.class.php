<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getPreco() { return $this->preco; }
    public function setPreco($preco) { $this->preco = $preco; }

    public function getQuantidade() { return $this->quantidade; }

    public function adicionarEstoque($qtd) {
        if ($qtd > 0) $this->quantidade += $qtd;
    }

    public function removerEstoque($qtd) {
        if ($qtd > 0 && $qtd <= $this->quantidade) $this->quantidade -= $qtd;
    }

    public function mostrarDetalhes() {
        echo "Produto: {$this->nome}\n";
        echo "<hr>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
        echo "<hr>";
        echo "Quantidade em estoque: {$this->quantidade}\n";
        echo "<hr>";
    }
}

?>
