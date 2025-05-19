<?php 
if(isset($_REQUEST['color'])){
    $color = $_REQUEST['color'];
    setcookie('color', $color, time() + 3600);
}else if(isset($_COOKIE['color'])){
    print_r($_COOKIE);
    $color = $_COOKIE['color'];//Recupera el color de la cookie
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?=$color?>;">
    <h1>Cambia color de fondo</h1>
    <form action="" method="post">
        <input type="color" name="color">
        <input type="submit" name="cambiarColor" value="CAMBIAR">
    </form>
</body>
</html>