<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
</head>
<body>

    <style>

        body{
            font-family: "Poppins", sans-serif;
        }

        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 4px;
        }

    </style>

    <h1>exercício 1</h1>
    
    <table>
        <tr>
            <td>coluna 1</td>
            <td>coluna 2</td>
            <td>coluna 3</td>
            <td>coluna 4</td>
        </tr>

        <?php


            for ($i = 1; $i <= 8; $i++) { //linha

                if ($i % 2 == 0) {
                    echo "<tr style='background-color: #836FFF;'>";
                } else {
                    echo "<tr style='background-color: #87CEEB;'>";
                }
                
                for ($x = 1; $x <= 4; $x++) { // coluna 
                    echo "<td>coluna $x da linha $i</td>";
                }
                echo "</tr>";
            }



        ?>
    </table>
   
</body>
</html>