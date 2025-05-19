<?php 
//Primera vez que cargo la página
if(!isset($_REQUEST['curriculums'])){
    //Array con currículums
    $curriculums = [
        '123456'=>['nombre'=>'Pepa', 'experiencia'=>'10 años en hostelería', 'formación'=>'curso de camarera'],
        '654321'=>['nombre'=>'Antonio', 'experiencia'=>'2 años de administrativo', 'formación'=>'fp superior de administración y finanzas'],
        '789012'=>['nombre'=>'Paco', 'experiencia'=>'30 años en construcción', 'formación'=>'curso de albañil'] 
        ];
}else{
    //Recogo el array con las modificaciones
    $curriculums= unserialize(base64_decode($_REQUEST['curriculums']));
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
    <h1>Introducir nuevo currículum o modificar uno que ya existe</h1>
    <form action="introducir.php" method="post">
        Introduce el dni:
        <input type="number" name="dni" required>
        <input type="hidden" name="curriculums" value="<?=$cadena_curriculums?>">
        <input type="submit" name="introducir" value="introducir">
    </form>

    <h1>Pulse aquí para ver una lista de los currículums</h1>
    <form action="lista.php" method="post">
    <input type="hidden" name="curriculums" value="<?=$cadena_curriculums?>">
    <input type="submit" name="ver" value="Ver currículums">
    </form>
</body>
</html>