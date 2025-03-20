<?php 
 if(isset($_REQUEST['calcular'])){
    $altura = $_REQUEST['altura'];
    $diametro = $_REQUEST['diametro'];
    $litros = $_REQUEST['litros'];

    //Calcular el volumen del cilindro
    $radio = $diametro/2;

    $volumen = M_PI * pow(3,2)*$altura;

    //Calcular tiempo
    $Vlitros = $volumen/1000;
    $Tmin = $Vlitros/$litros;

    //Convertir a horas y minutos;
    $horas = pow($Tmin/60, 2);
    $minutos = pow($Tmin%60, 2);
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
    <h1>Tiempo que tarda en llenar el cilindro</h1>

    <?php 
    echo "<p>Tardará $horas horas y $minutos minutos</p>";
    ?>
</body>
</html>