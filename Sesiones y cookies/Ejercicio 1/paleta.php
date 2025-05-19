<?php session_start();
if(!isset($_SESSION['colores'])){
    header('Location: index.php');
}

if(!isset($_REQUEST['color'])){
    $fondo = "255, 255, 255";
}else{
    $fondo = $_REQUEST['color'];
}

if(isset($_REQUEST['borrar'])){
    session_destroy();
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         td {
            width: 100px;
            height: 100px;
            padding: 0;
            margin: 0;
        }
        a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: rgb(<?=$fondo?>);">
    <h1>Mostrar paleta</h1>
    <table>
        <?php 
        $contador = 0;
        foreach($_SESSION['colores'] as $color){
        ?>
        <td>
            <a href="paleta.php?color=<?=$color?>" style="background-color: rgb(<?=$color?>);"></a>
        </td>
        <?php
        $contador++;
        if($contador%5 == 0){
            echo"<tr></tr>";
        }
        }
        ?>
    </table>

    <form action="" method="post">
        <input type="submit" name="borrar" value="Borrar Paleta">
    </form>
</body>
</html>