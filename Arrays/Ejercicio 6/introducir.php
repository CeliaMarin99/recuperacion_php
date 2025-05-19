<?php 
//Primera vez que cargo la página
if(!isset($_REQUEST['nuevoCampo'])){
    $dni = $_REQUEST['dni'];
    $curriculums= unserialize(base64_decode($_REQUEST['curriculums']));
}else{
        $dni = $_REQUEST['dni'];
        $curriculums= unserialize(base64_decode($_REQUEST['curriculums']));
        //Recojo los datos
        $campo = $_REQUEST['campo'];
        $valor = $_REQUEST['valor'];

        //Introducir en el array
        $curriculums[$dni][$campo] = $valor;

        print_r($curriculums);
    }

$cadena_curriculums = base64_encode(serialize($curriculums));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduce los datos del currículum</h1>
    <form action="" method="post">
        Campo:
        <input type="text" name="campo">
        <br>
        Valor:
        <input type="text" name="valor">
        <br>
        <input type="hidden" name="curriculums" value="<?=$cadena_curriculums?>">
        <input type="hidden" name="dni" value="<?=$dni?>">
        <input type="submit" name="nuevoCampo" value="Introducir">
    </form>

    <h3>Mostrar datos</h3>
    <?php 
    echo "DNI: ". $dni . "<br>";
    if (isset($curriculums[$dni])) {
        foreach ($curriculums[$dni] as $indiceDato => $dato) {
            echo $indiceDato . " : " . $dato . "<br>";
        }
    }
    ?>

    <form action="index.php" method="post">
        <input type="hidden" name="curriculums" value="<?=$cadena_curriculums?>">
        <input type="submit" name="finalizar" value="finalizar">
    </form>

</body>
</html>
