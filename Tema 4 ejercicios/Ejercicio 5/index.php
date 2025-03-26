<?php 
if(!isset($_REQUEST['celda'])){
    $celda = -1;
}else{
    $celda = $_REQUEST['celda'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 600px;
            height: 600px;
            border-collapse: collapse;
            margin: 0 auto;
        }

        td {
            width: 20%; /* Cada celda ocupa un 20% del ancho total */
            height: 20%; /* Para que sea cuadrada */
            text-align: center;
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <table>
       
        <?php 
         $contador = 1;
        for($i=1; $i<=5; $i++){
            echo "<tr>";
            for($j=1; $j<=5; $j++){ 
                $ojo = ($celda == $contador) ? "ojo-abierto" : "ojo-cerrado";
        ?>    

                <td>
                    <a href="index.php?celda=<?=$contador?>">
                        <img src="img/<?=$ojo?>.jpg">
                    </a>
                </td>
            
         <?php
         ++$contador;
            }
         echo "</tr>";
        }
        ?>
    </table>
</body>
</html>