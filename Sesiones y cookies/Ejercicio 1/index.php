<?php session_start(); 

if(!isset($_SESSION['colores'])){
    $_SESSION['colores'] = [];
    $fondo = "255, 255, 255";
}
if(isset($_REQUEST['color'])){
    $fondo = rand(0, 255).",". rand(0,255).",". rand(0,255);
    $_SESSION['colores'][] = $fondo;

    print_r($_SESSION['colores']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(<?=$fondo?>);">
    <h1>Añade un color</h1>
    <form action="" method="post">
        <input type="submit" name="color" value="Añadir">
    </form>

    <a href="paleta.php">Mostrar paleta</a>
</body>
</html>