<?php session_start();

if(!isset($_SESSION['mascotas'])){
    $_SESSION['mascotas'] = [];
    //"nombre"=>[tipo, edad];
}

$fecha = date("#d-m-Y#");

if(isset($_REQUEST['nueva'])){
    $_SESSION['mascotas'][$_REQUEST['nombre']] = $_REQUEST['datos'];

    print_r($_SESSION['mascotas']);
}

if(isset($_REQUEST['grabar'])){
    $fp= fopen("mascotas.txt", "r");

    $fechas = [];
    //PRIMERO LEE TODO EL ARCHIVO 
    //Guarda las fechas en un array
    while(!feof($fp)) {  
        $linea = fgets($fp);  
        if(str_starts_with($linea,"#")){
            $fechas[] = trim($linea);
           }
        } 
    fclose($fp);

    $fp= fopen("mascotas.txt", "a");
    //Comprobar si la fecha actual existe en el archivo
    if(!in_array($fecha, $fechas)){
        //Escribir fecha actual
        fputs($fp, $fecha .PHP_EOL);
    }

    //Escribir mascotas
    foreach($_SESSION['mascotas'] as $nombre=>$datos){
        fputs($fp, $nombre."-".$datos[0]."-".$datos[1] .PHP_EOL);
    }
    fclose($fp);
    session_destroy();
    header('Location: index.php');
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
    
    <h1>Registrar mascota</h1>
    <form action="" method="post">
        Nombre:
        <input type="text" name="nombre">
        <br>
        Tipo:
        <input type="text" name="datos[]">
        <br>
        Edad:
        <input type="number" name="datos[]">
        <br>
        <input type="submit" name="nueva" value="Añadir mascota">
    </form>

    <h2>Mascotas añadidas:</h2>
    <table>
        <thead>
            <td>Nombre</td>
            <td>Tipo</td>
            <td>Edad</td>
        </thead>
        <?php 
        foreach($_SESSION['mascotas'] as $nombre=>$datos){
        ?>
            <tr>
                <td><?=$nombre?></td>
                <td><?=$datos[0]?></td>
                <td><?=$datos[1]?></td>
            </tr>
        <?php 
        }
        ?>
    </table>

    <form action="" method="post">
        <input type="submit" name="grabar" value="GRABAR">
    </form>
</body>
</html>