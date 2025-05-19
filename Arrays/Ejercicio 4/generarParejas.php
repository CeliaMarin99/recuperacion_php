<?php 
if(!isset($_REQUEST['generar'])){
    header('Location: index.php');
}else{
    //Recojo la cadena de personas y lo transformo en array
    $personas = unserialize(base64_decode($_REQUEST['cadena']));

    if(isset($_REQUEST['elegir'])){
        $personaElegida = unserialize(base64_decode($_REQUEST['persona']));
        echo "Persona elegida";
        print_r($personaElegida);
        echo "</br>Personas:";
        print_r($personas);
        $cadenaPersona = base64_encode(serialize($personaElegida));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Parejas compatibles con <?=$personaElegida['nombre']?></h1>
        <table>
            <tr>
                <td>Nombre</td>
                <td>Sexo</td>
                <td>Orientaciónn</td>
            </tr>
            <?php 

            foreach($personas as $persona){
                //Si la persona elegida es Heterosexual
                if($personaElegida['orientacion'] == 'het' && $persona['orientacion'] == 'het'){
                    if($persona['sexo'] != $personaElegida['sexo']) {
                    $cadenaPareja = base64_encode(serialize($persona));
                    ?>
                     <tr>
                        <td><?=$persona['nombre']?></td>
                        <td><?=$persona['sexo']?></td>
                        <td><?=$persona['orientacion']?></td>

                        <td>
                            <form action="nuevaPareja.php" method="post">
                                <input type="hidden" name="personaElegida" value="<?=$cadenaPersona?>">
                                <input type="hidden" name="parejaElegida" value="<?=$cadenaPareja?>">
                                <input type="submit" name="generar" value="Generar">
                            </form>
                        </td>
                    </tr>


                    <?php 
                   }
                };
                //Si la persona elegida es homosexual
                if($personaElegida['orientacion'] == 'hom' && $persona['orientacion'] == 'hom'){
                    if($persona['sexo'] == $personaElegida['sexo'] && $persona['nombre'] != $personaElegida['nombre']) {
                    $cadenaPareja = base64_encode(serialize($persona));
                    ?>
                     <tr>
                        <td><?=$persona['nombre']?></td>
                        <td><?=$persona['sexo']?></td>
                        <td><?=$persona['orientacion']?></td>

                        <td>
                            <form action="nuevaPareja.php" method="post">
                                <input type="hidden" name="personaElegida" value="<?=$cadenaPersona?>">
                                <input type="hidden" name="parejaElegida" value="<?=$cadenaPareja?>">
                                <input type="submit" name="generar" value="Generar">
                            </form>
                        </td>
                    </tr>
                    <?php 
                   }
                };
            }
            ?>
        </table>

    <?php
    }
    ?>
  <h1>Pulsa elegir para ver las personas compatibles</h1>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Sexo</td>
            <td>Orientaciónn</td>
        </tr>
        <?php 
        foreach($personas as $persona){
        $cadenaPersona = base64_encode(serialize($persona));
        ?>
            <tr>
                <td><?=$persona['nombre']?></td>
                <td><?=$persona['sexo']?></td>
                <td><?=$persona['orientacion']?></td>

                <td>
                    <form action="" method="post">
                        <input type="hidden" name="persona" value="<?=$cadenaPersona?>">
                        <input type="submit" name="elegir" value="Elegir">
                    </form>
                </td>
            </tr>
            
        <?php
        }
        ?>
        
    </table>
<?php 
}
?>
</body>
</html>