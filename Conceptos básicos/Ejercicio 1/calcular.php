<?php 

    if(isset($_REQUEST['calcular'])){

        $altura = $_REQUEST['altura'];
        $diametro = $_REQUEST['diametro'];

        $radio = $diametro/2;

        $volumen = M_PI * pow(3,2)*$altura;
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
    <h1>El volumen del Cilindro es:</h1>

    <img src="cilindro.jpg" alt="cilindro">
    <?php 
    echo "<p>Volumen: ".round($volumen, 2)." cm³";
    ?>
</body>
</html>