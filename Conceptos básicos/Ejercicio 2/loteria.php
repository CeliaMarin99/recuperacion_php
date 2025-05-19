<?php 
    if(isset($_REQUEST['enviar'])){

        //Recojo el número introducido por el ususario
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $num3 = $_REQUEST['num3'];
        $num4 = $_REQUEST['num4'];
        $num5 = $_REQUEST['num5'];
        $num6 = $_REQUEST['num6'];

        $serie = $_REQUEST['serie'];

        //Generar el número ganador
        $numGan1 = rand(1,49);
        $numGan2 = rand(1,49);
        $numGan3 = rand(1,49);
        $numGan4 = rand(1,49);
        $numGan5 = rand(1,49);
        $numGan6 = rand(1,49);

        $serieGan = rand(1,999);
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
        table, tr, td {
            border: solid 1px black;
        }
        </style>
    </head>
    <body>
        <h1>El numero ganador es</h1>

        <table>
            <tr>
                <td>Número escogido:</td>
                <td><?=$num1?></td>
                <td><?=$num2?></td>
                <td><?=$num3?></td>
                <td><?=$num4?></td>
                <td><?=$num5?></td>
                <td><?=$num6?></td>
                <td><?=$serie?></td>
            </tr>

            <tr>
                <td>Numero ganador:</td>
                <td><?=$numGan1?></td>
                <td><?=$numGan2?></td>
                <td><?=$numGan3?></td>
                <td><?=$numGan4?></td>
                <td><?=$numGan5?></td>
                <td><?=$numGan6?></td>
                <td><?=$serieGan?></td>
            </tr>
        </table>
    </body>
    </html>


