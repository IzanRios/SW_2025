<?php
    require 'conexao.php';
    $livro = 1;
    $sql = "DELETE FROM livro WHERE idlivro = :livro";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':livro', $livro);
    if ($stmt->execute()) {
        echo "Livro excluído com sucesso!";
    } else {
        echo "Erro ao excluir Livro.";
    }
?>