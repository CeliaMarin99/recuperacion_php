<?php 
if(isset($_REQUEST['llamar'])){
    $bloque = $_REQUEST['bloque'];
    $piso = $_REQUEST['piso'];
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
    <h1>Has llamado al Bloque <?=$bloque?> Piso <?=$piso?></h1>
</body>
</html>