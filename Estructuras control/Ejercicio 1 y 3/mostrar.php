<?php 
if(isset($_REQUEST['celda'])){
    $celda = $_REQUEST['celda'];
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1; url=index.php">
    <title>Mostrar</title>
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
        <td>
            <a href="">
                <?php 
               $mostrar = ($celda == $i) ? $i : "cuadrado/$i";
                ?>
                <img src="img/<?=$mostrar?>.jpg" alt="">
            </a>
        </td>
    <?php
        if($i%3 == 0){
            echo "<tr></tr>";
        }

    }
    
    ?>
</table>
</body>
</html>