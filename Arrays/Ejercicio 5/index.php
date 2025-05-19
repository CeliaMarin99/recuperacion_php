<?php 
if(!isset($_POST['inscribir'])){
    $aspirantes = [];
}else{
    $aspirantes = unserialize(base64_decode($_REQUEST['aspirantes']));  
    $nombre = $_REQUEST['nombre'];
    $aspirantes[$nombre] = $_REQUEST['aspirante'];
    print_r($aspirantes);
}

$cadena_aspirantes = base64_encode(serialize($aspirantes));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Solicitar puesto de trabajo</h1>
    <form action="" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="">Edad:</label>
        <input type="number" name="aspirante[edad]">
        <br>
        <label for="">Años de experiencia:</label>
        <input type="number" name="aspirante[exp]">
        <br>
        <label for="">Correo:</label>
        <input type="text" name="aspirante[correo]">
        <br>
        <input type="hidden" name="aspirantes" value="<?=$cadena_aspirantes?>">
        <input type="submit" name="inscribir" value="Inscribirse">
    </form>

    <form action="elegidos.php" method="post">
        <input type="hidden" name="aspirantes" value="<?=$cadena_aspirantes?>">
        <input type="submit" name="finalizar" value="Finalizar">
    </form>
</body>
</html>