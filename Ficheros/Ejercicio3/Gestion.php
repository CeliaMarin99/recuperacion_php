<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@ <?=$_SESSION['usuario']?></h1>

    <a href="Redireccionar.php?cerrar">Cerrar sesión</a>

    <table>
         <thead>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Imagen</td>
            <td>Accion</td>
        </thead>

    <?php 
    foreach($_SESSION['productos'] as $id=>$datos){
    ?>
        <tr>
            <td><?=$datos[0]?></td>
            <td><?=$datos[1]?></td>
            <td>
                <img src="img/<?=$datos[2]?>" alt="">  
            </td>
            <td>
                <form action="accionesProducto.php" method="post">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </td>
            <td>
                <form action="Modificar.php" method="post">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="modificar" value="Modificar">
                </form>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
<h3>Añadir nuevo Producto</h3>
      <form  enctype="multipart/form-data" action="accionesProducto.php" method="post">
                Nombre:
                <input type="text" name="nombre">
                <br>
                Precio:
                <input type="number" name="precio">
                <br>
                Imagen:
                <input type="text" name="imagen">
                <br>
                <input type="submit" name="nuevo" value="NUEVO PRODUCTO">
            </form>
</body>
</html>