<?php session_start();

if(isset($_REQUEST['anadir'])){
    $id = $_REQUEST['id'];
    //Si no existe el producto
    if(!array_key_exists($id,$_SESSION['carrito'])){
        $_SESSION['carrito'][$id]=1;
    }else{
        $_SESSION['carrito'][$id]++;
    }

    print_r($_SESSION['carrito']);

    //Calcular cantidad Total
    $cantidad =0;
    $precio=0;
    foreach($_SESSION['carrito'] as $id=>$unidades){
        $cantidad+=$unidades;
        $precio+=$_SESSION['productos'][$id][1]*$unidades;
    }

    $_SESSION['numProductos']=$cantidad;
    $_SESSION['totalPrecio']=$precio;

    //Introducir en las cookies
    setcookie('numProductos', $_SESSION['numProductos'], time() + 24 * 3600);
    setcookie('totalPrecio', $_SESSION['totalPrecio'], time() + 24 * 3600);
    setcookie('carrito', serialize($_SESSION['carrito']), time() + 24 * 3600);

    header('Location: index.php');

}

if(isset($_REQUEST['eliminar'])){
    $id = $_REQUEST['id'];

    $_SESSION['carrito'][$id]--;

    if($_SESSION['carrito'][$id] == 0){
        unset($_SESSION['carrito'][$id]);
    }
     //Actualizar cantidad Total y Precio
    $cantidad =0;
    $precio=0;
    foreach($_SESSION['carrito'] as $id=>$unidades){
        $cantidad+=$unidades;
        $precio+=$_SESSION['productos'][$id][1]*$unidades;
    }

    $_SESSION['numProductos']=$cantidad;
    $_SESSION['totalPrecio']=$precio;

    //Actualizar las cookies
    setcookie('numProductos', $_SESSION['numProductos'], time() + 24 * 3600);
    setcookie('totalPrecio', $_SESSION['totalPrecio'], time() + 24 * 3600);
    setcookie('carrito', serialize($_SESSION['carrito']), time() + 24 * 3600);

      header('Location: Carrito.php');
}

if(isset($_REQUEST['vaciarCarrito'])){

    //borrarCarrito
    unset($_SESSION['carrito']);
    unset($_SESSION['numProductos']);
    unset( $_SESSION['totalPrecio']);

    session_destroy();

    //borrar cookies
    setcookie('numProductos', 0, 0);
    setcookie('totalPrecio', 0, 0);
    setcookie('carrito', "", 0);

    header('Location: Carrito.php');
}