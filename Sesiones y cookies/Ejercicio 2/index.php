<?php session_start();

/*Comprobar si existen las sesiones */
if(!isset($_SESSION['conCebolla']) || !isset($_SESSION['sinCebolla'])){

    /*Si existen las cookies recupera la información de ellas */
   if(isset($_COOKIE['conCebolla'])){
        $_SESSION['conCebolla'] = $_COOKIE['conCebolla'];
        $_SESSION['sinCebolla'] = $_COOKIE['sinCebolla'];   
    }else{
        /*Si no existen las cookies inicializa las sesiones */
        $_SESSION['conCebolla'] = 0;
        $_SESSION['sinCebolla'] = 0;
    }
    

}

if(isset($_REQUEST['conCebolla'])){
    $_SESSION['conCebolla']++;
    setcookie('conCebolla', $_SESSION['conCebolla'], time() + 3*30*24*60*60);
}

if(isset($_REQUEST['sinCebolla'])){
    $_SESSION['sinCebolla']++;
    setcookie('sinCebolla', $_SESSION['sinCebolla'], time() + 3*30*24*60*60);

}

if(isset($_REQUEST['eliminar'])){
    session_destroy();
}

if(isset($_REQUEST['borrar'])){
    setcookie("conCebolla", "", time() - 3600);
    setcookie("sinCebolla", "", time() - 3600);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Tortilla sin cebolla o con cebolla?</h1>
   
    <h2>Con Cebolla  
    <?php 
    for( $i=0; $i<=$_SESSION['conCebolla']; $i++){
    ?>
        <img src="punto-verde.avif" alt="punto verde" style="width: 10px; height: 10px;">

    <?php
    }
    ?></h2>
   
    <br>
    <h2>Sin Cebolla
    <?php 
    for( $i=0; $i<=$_SESSION['sinCebolla']; $i++){
    ?>
        <img src="punto-rojo.jpg" alt="punto rojo" style="width: 10px; height: 10px;">

    <?php
    }
    ?>
    </h2> 

    <form action="#" method="post">
        <input type="submit" name="conCebolla" value="CON CEBOLLA">
        <input type="submit" name="sinCebolla" value="SIN CEBOLLA">
    </form>

    <form action="#" method="post">
        <input type="submit" name="eliminar" value="Reiniciar votación">
    </form>

    <form action="#" method="post">
        <input type="submit" name="borrar" value="borrar Cookies">
    </form>
</body>
</html>