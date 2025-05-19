<?php 
// Si es la primera vez que se carga la página, inicializo el array
if (!isset($_REQUEST['ojos'])) {
    $ojos = array_fill(0, 25, 0);
} else {
    // Convertimos la cadena que recibo en array
    $ojos = explode(',', $_REQUEST['ojos']);

    // Verificar si se ha hecho clic en una celda
        $num = $_REQUEST['num'];
        
        // Cambiar el estado del ojo (abierto o cerrado)
        $ojos[$num] = ($ojos[$num] == 0) ? 1 : 0;

}


// Convierto el array a una cadena para enviarlo por el enlace
$cadena_ojos = implode(',', $ojos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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

    <h1 style="text-align: center;">Pulsa un ojo para abrirlo</h1>
    
    <table>
        <?php 
        $contador = 0;
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) { 
                $ojo = ($ojos[$contador] == 1) ? "ojo-abierto" : "ojo-cerrado";
        ?>    
                <td>
                    <a href="index.php?num=<?=$contador?>&ojos=<?=$cadena_ojos?>">
                        <img src="img/<?=$ojo?>.jpg" alt="Ojo">
                    </a>
                </td>
        <?php
                $contador++;
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
