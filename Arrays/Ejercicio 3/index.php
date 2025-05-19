<?php 
if (!isset($_REQUEST['imagen'])) {
    // Inicializa el array de imágenes con valores en 0
    $imagen = array_fill(0, 100, 0);
    $intentos = 10;
} else {
    // Recupera el array de imágenes
    $imagen = explode(',', $_REQUEST['imagen']);
    if(isset($_REQUEST['celda'])){
        $num = $_REQUEST['celda']; // Obtiene la celda seleccionada
        // Cambia el valor de la celda a 1 (descubierta)
        $imagen[$num] = 1;
    }
    $intentos = $_REQUEST['intentos'];
    
}

if($intentos == 0){
    echo "<h1>Lo siento, ya no te quedan intentos</h1>";
    echo "<h1>El animal es un gato/h1>";
    echo "<img src='img/gato.jpeg' style='width: 600px; height:600px;'></img>";
}else{
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubre la imagen</title>
    <style>
        table {
            background-image: url(img/gato.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 600px;
            height: 600px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            width: 10%; /* Cada celda ocupa el 10% del ancho */
            height: 10%;
            text-align: center;
            border: solid 1px black;
        }

        .gris {
            background-color: grey;
        }

        .transparente {
            opacity: 0;
            background-color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Adivina qué animal es</h1>
    <h3 style="text-align:center;">Te quedan <?=$intentos?> intentos</h3>
    <table>
        <?php 
        //convertir array a cadena
        $cadena = implode(',', $imagen);
        $contador = 0;

        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 10; $j++) {
                // Determina si la celda debe ser gris o transparente
                $clase = ($imagen[$contador] == 1) ? 'transparente' : 'gris';
        ?>
                <td class="<?= $clase ?>">
                    <a href="index.php?imagen=<?= $cadena ?>&celda=<?= $contador ?>&intentos=<?=$intentos - 1?>" style="display:block; width:100%; height:100%;">
                       
                    </a>
                </td>
        <?php
                $contador++;
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <form action="adivinar.php" method="post">
        <input type="text" name="animal" placeholder="Inténtalo" required>
        <input type="hidden" name="intentos" value="<?=$intentos?>">
        <input type="hidden" name="imagen" value='<?=$cadena?>'>
        <input type="submit" value="adivinar" name="adivinar">
    </form>
</body>
</html>

<?php 
}
?>
