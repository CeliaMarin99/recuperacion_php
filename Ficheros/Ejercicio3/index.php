<?php session_start();

if(!isset($_SESSION['productos'])){
    $_SESSION['productos'] = [];
//llenar el array con los datos del archivo
 /*
  array(
  [id]=>array([0]=>nombre, [1]=>precio, [2]=>imagen])
  ...
  )
  */
  $ArrayFile = file('productos.txt');//convertir archivo en array

  for($i=0; $i<count($ArrayFile); $i++){
        $producto = explode("-", $ArrayFile[$i]);
        for($j=0; $j<count($producto); $j++){
            $_SESSION['productos'][$producto[0]] = array_slice($producto, 1);
        }
  }
}

if (!isset($_SESSION['usuario']) && isset($_COOKIE['usuario'])) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}
//Si no existe la sesion carrito
if(!isset($_SESSION['carrito'])){
    //recuperar informacion de las cookies
    if(isset($_COOCKIE['carrito'])){
        $_SESSION['carrito']=unserialize($_COOKIE['carrito']);
        $_SESSION['numProductos']=$_COOKIE['numProductos'];
        $_SESSION['totalPrecio']=$_COOCKIE['totalPrecio'];
    }else{
         $_SESSION['carrito']=[];
        $_SESSION['numProductos']=0;
        $_SESSION['totalPrecio']=0;
    }
  
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
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Tienda de Informática</h1>
    <a href="Carrito.php">Ver carrito</a>
    <p>Productos: <?=$_SESSION['numProductos']?></p>
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
                <form action="accionesCarrito.php" method="post">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="anadir" value="Añadir">
                </form>
            </td>
        </tr>
    <?php
    }
    ?>
    </table>
    <h3><a href="Redireccionar.php">Ir a gestión de productos</a></h3>
</body>
</html>