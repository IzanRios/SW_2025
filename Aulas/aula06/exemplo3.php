<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 3</title>
</head>
<body>

    <h1>array indexado</h1>
    <p>O array acima é um array indexado , onde o primeiro item tem a chave 0, o segundo tem a chave 1 e assim por diante.</p>

    <?php

        $dados = [1,4,6,8];

        // print_r($dados);

        // var_dump: mais detalhado
        // print_r: menos detalhado

        for ($i=0; $i<=3; $i++) {
            echo $dados[$i]."<br>";
        }

    ?>
</body>
</html>