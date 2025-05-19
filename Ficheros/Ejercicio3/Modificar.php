<?php session_start();

$id=$_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modificar Producto</h1>
    <form action="accionesProducto.php" method="post">
        Nombre:
        <input type="text" name="nombre">
        <br>
        Precio:
        <input type="number" name="precio">
        <br>
        Imagen:
        <input type="text" name="imagen">
        <br>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="modificar" value="Modificar">
    </form>
</body>
</html>