<?php
require 'conexao.php';
$sql = "SELECT * FROM livro";
$stmt = $pdo->query($sql);
while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Título: " . $livro['titulo'] . "<br>";
    echo "Preço: R$" . $livro['preco'] . "<br>";
    echo "Ano: R$" . $livro['ano'] . "<br>";
    echo "Autor: R$" . $livro['autor'] . "<br>";
    echo "Páginas: R$" . $livro['paginas'] . "<br>";
    echo "Gènero: " . $livro['genero'] . "<br>.<br>";
}
?>