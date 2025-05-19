<?php session_start(); 
if(!isset($_SESSION['listado'])){
    $_SESSION['listado'] =[];
}

if(isset($_REQUEST['buscar'])){
    $fecha = $_REQUEST['fecha'];

    $array= file('mascotas.txt');//convierto el archivo en un array
    $posicion = array_search($fecha, $array);//averiguo la posicion
   
   //Limpiar listado
    $_SESSION['listado'] = []; 
        for ($i = $posicion + 1; $i < count($array); $i++) {
            $linea = $array[$i];
            if (str_starts_with($linea, "#")){
                break;//sale del bucle cuando encuentra otra fecha.
            }
            $_SESSION['listado'][] = trim($linea);
        }

        echo "<pre>";
        print_r($_SESSION['listado']);
        echo "</pre>";
    
}
$array= file('mascotas.txt');//convierto el archivo en un array

//print_r($array);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Seleccione una fecha:</h3>
    <form action="" method="post"> 
        <select name="fecha" id="">
            
        <?php 
        $fp = fopen("mascotas.txt", "r"); 
        while(!feof($fp)) {  
        $linea = fgets($fp); 
        if(str_starts_with($linea,"#")){//Si encuentra una fecha
            echo "<option value='$linea'>$linea</option>";
        }
        } 
        fclose($fp); 
        ?>
        </select>
        <input type="submit" name="buscar" value="Buscar">
    </form>

  <table>
    <thead>
        <td>Nombre</td>
        <td>Tipo</td>
        <td>Edad</td>
    </thead>

    <?php 
    for($i=0; $i<count($_SESSION['listado']); $i++){
        echo"<tr>";
        $mascota = explode("-",$_SESSION['listado'][$i]);
        for($j=0; $j<count($mascota);$j++){
            echo "<td>$mascota[$j]</td>";
        }
        echo "</tr>";
    }
    ?>
  </table>
</body>
</html>