<?php 
if(isset($_REQUEST['calcular'])){
    $tienda1 = $_REQUEST['tienda1'];
    $tienda2 = $_REQUEST['tienda2'];
    $tienda3 = $_REQUEST['tienda3'];

    $media = ($tienda1 + $tienda2 + $tienda3)/3;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Media de precioss</h1>

    <table>
        <th>
            <td></td>
            <td>Precio</td>
            <td>Diferencia</td>
        </th>
        <tr>
            <td>Tienda 1</td>
            <td><?=$tienda1?></td>
            <td><?=$tienda1 - $media?></td>
        </tr>
        <tr>
            <td>Tienda 2</td>
            <td><?=$tienda2?></td>
            <td><?=$tienda2 - $media?></td>
        </tr>

        <tr>
            <td>Tienda 3</td>
            <td><?=$tienda3?></td>
            <td><?=$tienda3 - $media?></td>
        </tr>
        <tr>
            <td>Media</td>
            <td><?=round($media, 2)?></td>
        </tr>
    </table>
</body>
</html>