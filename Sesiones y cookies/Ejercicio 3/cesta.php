<?php session_start();
print_r($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Productos en tu cesta</h1>
    <?php 
    if($_SESSION['totalCantidad'] == 0){
        echo "La cesta está vacía";
    }else{
    ?>
    <table>

        <thead>
            <td>Nombre</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>Acciones</td>
        </thead>
    </table>
   <?php
        foreach($_SESSION['carrito'] as $producto){
    ?>
            <tr>
                <td><?=$producto['nombre']?></td>
                <td><?=$producto['cantidad']?></td>
                <td><?=$producto['precio']?></td>
                <td>
                    <form action="vaciarCarrito.php" method="post">
                        <input type="hidden" name="nombre" value="<?=$producto['nombre']?>">
                        <input type="submit" name="eliminarProducto" value="eliminar">
                    </form>
                </td>

            </tr>
<?php
        }
?>
            <tr>
                <td>Total</td>
                <td><?=$_SESSION['totalCantidad']?></td>
                <td><?=$_SESSION['totalPrecio']?></td>
                <td>
                <form action="vaciarCarrito.php" method="post">
                        <input type="submit" name="vaciarCarrito" value="Vaciar Carrito">
                    </form>
                </td>
            </tr>

            <a href="index.php">Volver a la página principal</a>
<?php 
    }
    ?>
</body>
</html>