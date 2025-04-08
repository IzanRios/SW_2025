<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
</head>
<body>
    <style>

        body{
            font-family: "Poppins", sans-serif;
        }

        table{
            width: 70%;
            border-collapse: collapse;
            margin: 20px;
            text-align: center;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #e3e3e3;
        }

        .eletrônico{
            background-color: #87CEFA;
        }

        .roupas{
            background-color: #836FFF;
        }

        .alimentos{
            background-color: #7FFFD4;
        }


    </style>
    <h1>exercicio 3</h1>
    <table>
        <tr>
            <th>nome</th>
            <th>preço</th>
            <th>cetegoria</th>
        </tr>
        <?php

            $dados = [
                ["nome" => "celular", "preco" => "R$2.500,00", "categoria" => "eletrônico"],
                ["nome" => "notebook", "preco" => "R$3.700,00", "categoria" => "eletrônico"],
                ["nome" => "camiseta", "preco" => "R$30,00", "categoria" => "roupas"],
                ["nome" => "calça", "preco" => "R$90,00", "categoria" => "roupas"],
                ["nome" => "chocolate", "preco" => "R$5,50", "categoria" => "alimentos"],
                ["nome" => "bolacha", "preco" => "R$7,90", "categoria" => "alimentos"],
            ];

            foreach ($dados as $produto) {
                echo "<tr class='". $produto['categoria'] ."'>";  // a classe é a própria categoria
                echo "<td>". $produto['nome'] ."</td>";
                echo "<td>". $produto['preco'] ."</td>";
                echo "<td>". $produto['categoria'] ."</td>";
                echo "</tr>";
            }

        ?>
    </table>
</body>
</html>
