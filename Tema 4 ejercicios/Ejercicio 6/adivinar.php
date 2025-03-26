<?php 
if(isset($_REQUEST['enviar'])){
    $animal = $_REQUEST['animal'];
    $imagen = "gato";
    if(isset($_REQUEST['intentos'])){
        $intentos = $_REQUEST['intentos'];
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            text-align: center;
        }
        img {
            width: 500px;
            height: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>Adivina que animal es</h1>
    <?php 
    if($imagen == $animal){
        echo "<h3>Enhorabuena has acertado en $intentos intentos</h3>";
        echo "<p>El animal es un gato</p>";
        echo "<img src='img/gato.jpeg'></img>";
    }else{
        echo "<h3>Oh lo siento has fallado</h3>";
        echo "<p>Vuelve a intentarlo</p>";
        echo "<a href='index.php?intentos=" . $intentos . "'>Volver a la página principal</a>";
    }
}    
    ?>
</body>
</html>