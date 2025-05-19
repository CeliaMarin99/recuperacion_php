<?php 
if(!isset($_REQUEST['generar'])){
    header('Location: index.php');
}else{
    //Recoger persona elegida
    $personaElegida = unserialize(base64_decode($_REQUEST['personaElegida']));
    //Recoger pareja elegida
    $parejaElegida = unserialize(base64_decode($_REQUEST['parejaElegida']));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pareja seleccionada: <?=$personaElegida['nombre']?> y <?=$parejaElegida['nombre']?></h1>
</body>
</html>

<?php 
}
?>