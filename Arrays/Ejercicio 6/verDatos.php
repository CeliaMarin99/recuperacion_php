<?php 
if(!isset($_REQUEST['verDatos'])){
    header('Location: lista.php');
}else{
    $curriculum = unserialize(base64_decode($_REQUEST['curriculum']));
    $dni = $_REQUEST['dni'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Curriculum <?=$dni?></h3>
    <?php 
    foreach($curriculum as $indice => $dato){
        echo $indice . " : " . $dato;
        echo "<br>";
    }
    ?>
</body>
</html>
<?php
}
?>