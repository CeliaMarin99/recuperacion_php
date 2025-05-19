<?php 

if(isset($_REQUEST['nueva'])){
    //Recojo el array en forma de cadena y lo convierto a array
    $personas = unserialize(base64_decode($_REQUEST['cadena']));
    //Recojo los parametros de la persona nueva
    //Y los introduzco en un array
    $nuevaPersona = [
        'nombre'=> $_REQUEST['nombre'],
        'sexo'=> $_REQUEST['sexo'],
        'orientacion'=> $_REQUEST['orientacion']
    ]; 
    //nuevaPersona lo introduzco en el array de personas
    $personas[] = $nuevaPersona;

    print_r($personas);
}else{
//Crear array con las personas
$personas = [
    ['nombre'=>'Roberto','sexo'=>'h','orientacion'=>'het'], 
    ['nombre'=>'Antonio','sexo'=>'h','orientacion'=>'het'], 
    ['nombre'=>'Manuela','sexo'=>'m','orientacion'=>'het'], 
    ['nombre'=>'Isabel','sexo'=>'m','orientacion'=>'het'], 
    ['nombre'=>'Jenifer','sexo'=>'m','orientacion'=>'hom'], 
    ['nombre'=>'Susan','sexo'=>'m','orientacion'=>'hom'], 
    ['nombre'=>'Peter','sexo'=>'h','orientacion'=>'hom'], 
    ['nombre'=>'Mike','sexo'=>'h','orientacion'=>'hom']
];
}

$cadena = base64_encode(serialize($personas));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduce una nueva persona</h1>
    <form action="" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="">Sexo:</label>
        Hombre <input type="checkbox" name="sexo" value="h">
        Mujer <input type="checkbox" name="sexo" value="m">
        <br>
        <label for="">Orientación:</label>
        <select name="orientacion" id="">
            <option value="het">Hetero</option>
            <option value="hom">Homosexual</option>
        </select>
        <br>
        <input type="hidden" name="cadena" value="<?=$cadena?>">
        <input type="submit" name="nueva" value="Introducir">    
    </form>

    <br>
    <h1>Pulse aquí para generar parejas</h1>
    <form action="generarParejas.php">
        <input type="hidden" name="cadena" value="<?=$cadena?>">
        <input type="submit" name="generar" value="Generar">    
    </form>
</body>
</html>