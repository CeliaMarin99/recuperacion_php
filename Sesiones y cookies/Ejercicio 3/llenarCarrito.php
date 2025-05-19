<?php session_start();
if(isset($_REQUEST['anadir'])){
    $nombre= $_REQUEST['nombre'];
    //Comprobar si ya existe el producto
    if(array_key_exists($nombre, $_SESSION['carrito'])){
        $_SESSION['carrito'][$nombre]['cantidad']++;//icrementa la cantidad
    }else{
        //Añade el producto por primera vez
        $_SESSION['carrito'][$nombre]=$_SESSION['productos'][$nombre];
        $_SESSION['carrito'][$nombre]['cantidad']=1;
    }

    //Contar productos y calcular precio total
    $totalcantidad=0;
    $totalPrecio=0;
    foreach($_SESSION['carrito'] as $producto){
        $totalcantidad+= $producto['cantidad'];
        $totalPrecio+=$producto['cantidad']*$producto['precio'];
    }

    $_SESSION['totalCantidad']=$totalcantidad;
    $_SESSION['totalPrecio']=$totalPrecio;

    setcookie('totalCantidad', $_SESSION['totalCantidad'], time() + 24 * 3600);
    setcookie('totalPrecio', $_SESSION['totalPrecio'], time() + 24 * 3600);
    setcookie('carrito', serialize($_SESSION['carrito']), time() + 24 * 3600);

  header('Location: index.php');
}
?>