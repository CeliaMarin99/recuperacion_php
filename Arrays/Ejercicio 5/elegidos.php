<?php 
if(!isset($_POST['aspirantes'])){
    echo "<h2>Primero deben introducir los aspirantes</h2>";
    echo "<a href='index.php'>Volver a la página principal</a>";
}else{

    // Recoger aspirantes desde la URL (base64_decode y unserialize)
    $aspirantes = unserialize(base64_decode($_REQUEST['aspirantes'])); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .excluido{
            color: red;
        }

        .elegido {
            color: green;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Experiencia</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Recorremos los aspirantes para mostrar sus datos
            foreach($aspirantes as $aspirante => $valor){
                // Usamos el valor de la edad para decidir el estilo
                $estilo = ($valor['edad'] >= 30) ? 'excluido' : 'elegido';
                echo "<tr>";
                echo "<td class='$estilo'>$aspirante</td>";
                echo "<td class='$estilo'>{$valor['edad']}</td>";
                echo "<td class='$estilo'>{$valor['exp']}</td>";
                echo "<td class='$estilo'>{$valor['correo']}</td>";
                echo "</tr>";     
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php 
}
?>
