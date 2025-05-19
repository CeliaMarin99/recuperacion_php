<?php session_start();

if(isset($_REQUEST['eliminarProducto'])){

    $producto = $_SESSION['carrito'][$_REQUEST['nombre']];

    if($producto['cantidad'] == 0){

        unset($_SESSION['carrito'][$_REQUEST['nombre']]);//Elimina el producto

    }else{
        $_SESSION['carrito'][$_REQUEST['nombre']]['cantidad']--;
        
        $_SESSION['totalCantidad']--;
        $_SESSION['totalPrecio']-=$producto['precio'];
    }

    
    //Actualizar cookies
    setcookie('totalCantidad', $_SESSION['totalCantidad'], time() + 24 * 3600);
    setcookie('totalPrecio', $_SESSION['totalPrecio'], time() + 24 * 3600);
    setcookie('carrito', serialize($_SESSION['carrito']), time() + 24 * 3600);

    header('Location: cesta.php');

}

if(isset($_REQUEST['vaciarCarrito'])){

    session_destroy();
    setcookie('totalCantidad', null, -1);
    setcookie('totalPrecio', null, -1);
    setcookie('carrito', null, -1);
    header('Location: index.php');
}

?>