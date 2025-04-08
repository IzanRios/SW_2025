<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
    <style>

        body{
            font-family: "Poppins", sans-serif;
        }

        input, label{
            margin-top: 10px;
        }

        form{
            background-color:  #e3e3e3;
            border-radius: 10px;
            padding: 10px;
        }

    
    </style>
</head>
<body>
    <form method="post" action="processa_ex2.php">

        <h2>exercicio 2</h2>

        <label for="linhas">Número de linhas:</label>
        <input type="number" name="linhas" id="linhas" required>

        <br>

        <label for="colunas">Número de colunas:</label>
        <input type="number" name="colunas" id="colunas" required>

        <br>

        <input type="submit" value="Gerar Tabela"></input>

    </form>

    
</body>
</html>
