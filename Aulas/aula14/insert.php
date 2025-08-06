<?php
    require 'conexao.php';
    $titulo = "Corinthians vence o Palmeiras";
    $preco = 19.10;
    $genero = "Ação";
    $ano = "1910";
    $autor = "Ízan Rios";
    $paginas = "215";
    $sql = "INSERT INTO livro (titulo, preco, genero, ano, autor, paginas) VALUES (:titulo, :preco, :genero, :ano, :autor, :paginas)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
        echo "Livro inserido com sucesso!";
    } 

    else {
        echo "Erro ao inserir livro.";
    }
?>