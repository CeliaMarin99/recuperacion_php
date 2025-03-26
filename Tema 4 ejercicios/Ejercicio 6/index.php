<?php 
if(isset($_REQUEST['intentos'])){
    $intentos = $_REQUEST['intentos'];
}else{
    $intentos = 0;
}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        table {
            width: 500px;
            height: 500px;
        }

        img {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Adivina que animal es</h1>

    <table style="margin: 0 auto;">
        <?php 
        for($i=1; $i<=9; $i++){
        ?>
            <td><a href="mostrar.php?celda=<?=$i?>"><img src="img/cuadrado/<?=$i?>.jpg"></a></td>
        <?php
            if($i%3 == 0){
                echo "<tr></tr>";
            }

        }
        
        ?>
    </table>

    <form action="adivinar.php" method="post">
        <label for="">Animal:</label>
        <input type="hidden" name="intentos" value="<?=++$intentos?>">
        <input type="text" name="animal">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>