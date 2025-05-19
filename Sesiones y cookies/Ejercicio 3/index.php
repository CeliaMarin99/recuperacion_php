<?php 
session_start();
//Primera vez que se carga la página
if(!isset($_SESSION['carrito'])){

    if (isset($_COOKIE['carrito'])) {
        $_SESSION['carrito']=unserialize($_COOKIE['carrito']);
        $_SESSION['totalPrecio']    = $_COOKIE['totalPrecio'];
        $_SESSION['cantidad'] = $_COOKIE['cantidad'];
    }else{
        $_SESSION['carrito']=[];//Inicializar carrito
        $_SESSION['totalCantidad']=0;
        $_SESSION['totalPrecio']=0;
    }
       
}

$_SESSION['productos'] = [
   'raton'=> ['nombre'=> 'raton', 'precio'=>6, 'detalles'=>" Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo?"],
    'teclado'=>['nombre'=> 'teclado', 'precio'=>15, 'detalles'=>" Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo?"],
    'monitor'=>['nombre'=> 'monitor', 'precio'=>50, 'detalles'=>" Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo?"],
    'joystick'=>['nombre'=> 'joystick', 'precio'=>33, 'detalles'=>" Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo?"],
];

print_r($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100%;
        }

        td{
            width: 100px;
        }
    </style>
</head>
<body>
   <h1>Tienda de Informática</h1>
   <table>
    <thead>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Imagen</td>
    </thead>
    <?php 
    foreach($_SESSION['productos'] as $producto){
    ?>
        <tr>
            <td><?=$producto['nombre']?></td>
            <td><?=$producto['precio']?></td>
            <td>
                <a href="detalles.php?nombre=<?=$producto['nombre']?>"><img src="img/<?=$producto['nombre']?>.jpg" alt=""></a>
            </td>
            <td>
                <form action="llenarCarrito.php" method="post">
                    <input type="hidden" name="nombre" value="<?=$producto['nombre']?>">
                    <input type="submit" name="anadir" value="Añadir a la cesta">
                </form>
            </td>
        </tr>
    
    <?php 
    }
    ?>
   </table>

   <h2>Productos en la Cesta: <?=$_SESSION['totalCantidad']?></h2>
   <a href="cesta.php">Ver la cesta</a>
</body>
</html>