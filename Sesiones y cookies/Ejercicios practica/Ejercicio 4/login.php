<?php session_start();
if(isset($_REQUEST['nombre'])){
    $_SESSION['usuario'] = $_REQUEST['nombre'];
}

if(isset($_REQUEST['borrar'])){
    session_destroy();
    header('Location: index.php');
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
   <h2>Hola <?=$_SESSION['usuario']?></h2> 

   <form action="" method="post">
    <input type="submit" name="borrar" value="CERRAR SESIÓN">
   </form>
</body>
</html>