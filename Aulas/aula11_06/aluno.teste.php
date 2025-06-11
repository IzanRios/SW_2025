<?php
    include_once 'Aluno.class.php';

    $aluno = new Aluno("João", 8, 6);
    echo $aluno->getNome() . " - Média: " . $aluno->getMedia() . " - Situação: " . $aluno->verificarSituacao();
    echo "<hr>";
?>