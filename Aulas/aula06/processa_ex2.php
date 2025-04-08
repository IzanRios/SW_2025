<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processa exercicio 2</title>
</head>
<body>
    <?php
                $linhas = (int) $_POST['linhas'];
                $colunas = (int) $_POST['colunas'];
                
                echo "<table>";
                
                $i = 1;
                while ($i <= $linhas) {
                    echo "<tr>";
                    
                    $j = 1;
                    while ($j <= $colunas) {
                        echo "<td>coluna $j da linha $i</td>";
                        $j++;
                    }
                    
                    echo "</tr>";
                    $i++;
                }
                
                echo "</table>";
    ?>
    <style>

        body{
            font-family: "Poppins", sans-serif;
        }
        
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        } 

    </style>
    
    <a href="exercicio2.php"><button>Voltar</button></a>
</body>
</html>

