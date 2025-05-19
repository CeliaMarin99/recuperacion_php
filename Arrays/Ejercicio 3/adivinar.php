<?php 
if(isset($_REQUEST['adivinar'])){
    
    $animal = $_REQUEST['animal'];
    $imagen = $_REQUEST['imagen'];
    $intentos = $_REQUEST['intentos'];
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
    <?php 
    if($animal == "gato"){
        echo "<h1>Enhorabuena has acertado en $intentos intentos</h1>";
        echo "<img src='img/gato.jpeg'></img>";
    }else{
        if($intentos == 0){
            echo "No has acertado y se te han acabado los intentos";
        }else{
            echo "Esa no era, pero aún te quedan $intentos intentos";
            echo "<a href= index.php?intentos=$intentos&imagen=$imagen>Sigue intentándolo</a>";
        }
    }
    ?>
</body>
</html>