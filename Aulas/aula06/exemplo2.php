<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 2</title>
</head>
<body>

    <style>

        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 2px;
        }

    </style>

    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
        </tr>
        <?php

        for ($i=1; $i <= 4; $i++) {
            echo "
                <tr>
                    <td>coluna 1 da linha $i</td>
                    <td>coluna 2 da linha $i</td>
                    <td>coluna 3 da linha $i</td>
                </tr>
            ";
        }

        ?>
    </table>

    <!-- <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
        </tr>
        <tr>
            <td>coluna 1 da linha 1</td>
            <td>coluna 2 da linha 1</td>
            <td>coluna 2 da linha 1</td>
        </tr>
        <tr>
            <td>coluna 1 da linha 2</td>
            <td>coluna 2 da linha 2</td>
            <td>coluna 3 da linha 2</td>
        </tr>
        <tr>
            <td>coluna 1 da linha 3</td>
            <td>coluna 2 da linha 3</td>
            <td>coluna 3 da linha 3</td>
        </tr>
    </table> -->

</body>
</html>