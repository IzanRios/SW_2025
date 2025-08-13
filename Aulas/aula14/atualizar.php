<?php
    require 'conexao.php';
    $livro = 1;
    $novoPreco = 191.00;
    $sql = "UPDATE livro SET preco = :preco WHERE preco = :preco";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':preco', $novoPreco);
    $stmt->bindParam(':preco', $preco);
    if ($stmt->execute()) {
        echo "Preço atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar preço.";
    }
?>