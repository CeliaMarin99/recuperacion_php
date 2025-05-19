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
    <h1>Interior del Carrito</h1>
<?php 
if(!isset($_SESSION['carrito']) || $_SESSION['numProductos'] ==0){
        echo "La cesta está vacía";
    }else{
?>
    <table>
        <thead>
            <td>Producto</td>
            <td>Precio</td>
            <td>Imagen</td>
            <td>Cantidad</td>
            <td>Accion</td>
        </thead>

    <?php 
    foreach($_SESSION['carrito'] as $id=>$cantidad){
    ?>
    <tr>
        <td><?=$_SESSION['productos'][$id][0]?></td>
        <td><?=$_SESSION['productos'][$id][1]?></td>
        <td>
            <img src="img/<?=$_SESSION['productos'][$id][2]?>" alt="">  
        </td>
        <td><?=$cantidad?></td>
        <td>
            <form action="accionesCarrito.php" method="post">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="eliminar" value="Eliminar">
            </form>
        </td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td>Importe Total:</td>
        <td><?=$_SESSION['totalPrecio']?></td>
    </tr>
    </table>

    <form action="accionesCarrito.php" method="post">
         <input type="submit" name="vaciarCarrito" value="VACIAR CARRITO">
    </form>
<?php 
}
?>

<a href="index.php">Volver a la página principal</a>
</body>
</html>