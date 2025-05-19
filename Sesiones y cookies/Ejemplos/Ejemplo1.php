
<?php session_start(); // Inicio de sesión
//La sesión sigue existiendo aunque cierres el navegador, sólo se borrará con un session destroy o borrando el historial

if(!isset($_SESSION['visitas'])){
    $_SESSION['visitas'] = 1;
}else{
    $_SESSION['visitas']++;
}

if(isset($_REQUEST['borrar'])){
    /*
    Si pongo sólo un session destroy no se borrará de inmediato y necesitaré volver a cargar la página
    Hay que borrar una sesión de la siguiente manera:
    */
    session_unset(); // Borra todas las variables de sesión
    session_destroy(); // Destruye la sesión en el servidor

    // Redirige a la misma página para evitar que los datos persistan
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
echo "Visitas: ".$_SESSION['visitas'];
?>

<form action="" method="post">
<input type="submit" name="borrar" value="BORRAR SESION">
</form>
</body>
</html>
