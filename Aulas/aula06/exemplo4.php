<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 4</title>
</head>
<body>
    <h1>array associativo</h1>
    <p>Matrizes associativas são diferentes, matrizes associativas usam chaves nomeadas que você atribui a elas e, ao percorrer matrizes associativas, você pode querer manter a chave e também o valor.</p>

    <?php

    // $dados = [[posicao 0],[posicao 1]]

    $dados = [
        [
            "nome" => "byanca",
            "idade" => 16,
            "tel" => "1234567890",
            "cidade" => "mauá"
        ],
        [
            "nome" => "maria",
            "idade" => 20,
            "tel" => "0987654321",
            "cidade" => "ribeirão pires"  
        ]
    ];

    // print_r($dados);

    // para cada coisa que encontrar em dados, armazena em $conteudo
    // foreach ($dados as $conteudo) {
    //     echo $conteudo."<br>";
    // }

    foreach ($dados as $chave => $value) {  // passar por cada vetor
        // echo "chave externa: ".$chave."<br>";

        foreach ($dados[$chave] as $key => $value) { // pegar cada item
            echo "$key: ".$value."<br>";
        }

        echo "<hr>";
    }


    // consigo acessar especifico
    // echo $dados[1]["cidade"];


    ?>
</body>
</html>