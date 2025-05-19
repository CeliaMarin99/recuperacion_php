<?php session_start();
if(isset($_REQUEST['nombre'])){

    $producto = $_SESSION['productos'][$_REQUEST['nombre']];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 500px;
        }
    </style>
</head>
<body>
    <h1>Detalles del producto</h1>
    <img src="img/<?=$producto['nombre']?>.jpg" alt="">
    <br>
    Precio: <?=$producto['precio']?>
    <br>
    Detalles: <?=$producto['detalles']?>
    <br>
    <a href="index.php">Volver a la pagina principal</a>
</body>
</html>