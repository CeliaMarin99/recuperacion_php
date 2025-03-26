<?php 
//La primera vez se inicializa el array
if(!isset($_REQUEST['jugar'])){
   
    $ganador = [];
    $seleccionado = [];
}else {
    //generar combinación ganadora
    for($i=0; $i<=5 ; $i++){
        $ganador[$i] = rand(1,49);
    }
    //generar numero de serie
    $serieGan = rand(1,999);

    //Recoger serie seleccionado
    $serie = $_REQUEST['serie'];
    if(isset($_REQUEST['numero'])){
        $seleccionado = $_REQUEST['numero'];
    }
    
    $contador = 0;//Cuenta los números seleccionados
    $contGan = 0; //Cuenta los acertados

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border: solid 2px greenyellow;
        }
    </style>
</head>
<body>
    <h1>Combinación ganadora</h1>
        <table>
            <?php 
            //Generar tabla con combinación ganadora
            for($i=1; $i<=49; $i++){

                //Si ha sido seleccionado
                if(in_array($i, $seleccionado)){
                    
                    ++$contador;
                    //Si coincide con el ganador verde
                    if(in_array($i, $ganador)){
                        echo "<td style='color: green'>$i</td>";
                        $contGan++;
                    }else{
                        //Si no coincide negro
                        echo "<td>$i</td>";
                    }
                }else{
                    //Si no ha sido seleccionado

                    //Si coincide con el ganador rojo
                    if(in_array($i, $ganador)){
                        echo "<td style='color: red'>$i</td>";
                    }else{
                        //Si no coincide gris
                        echo "<td style='color: grey'>$i</td>";
                    }
                    
                }
                //Añadir otra fila
                if($i%7 == 0){
                    echo "<tr></tr>";
                }
            }
            ?>
                          
          
        </table>

        <p>Serie: <?=$serieGan?></p>

    
        <?php 

        //Si ha hecho trampas
        if($contador>6){
            echo "<h2 style='color: red';>Has hecho trampas</h2>";
        }else{
              //Aciertos y premios
                switch($contGan) { 
                    case 4: 
                        if($serie == $serieGan){
                            echo "Has acertado el numero de serie ganas 500 euros";
                        }else{
                            echo "Aciertos: ".$contGan;
                            echo "<br>";
                            echo "Has ganado, el dinero devuelto";
                        }

                    break; 
                    case 5: 
                        if($serie == $serieGan){
                            echo "Has acertado el numero de serie y 5 numeros ganas 530 euros";
                        }else{
                            echo "Aciertos:".$contGan;
                            echo "Has ganado, 30 euros";
                        }
                    break;
                    case 6: 
                        if($serie == $serieGan){
                            echo "Has acertado el numero de serie y todos los numeros ganas 600 euros";
                        }else{
                            echo "Aciertos:".$contGan;
                            echo "Has ganado, 100 euros";
                        }
                    break;
                    default: 
                    if($serie == $serieGan){
                        echo "No has acertado ninguna combinación pero, has acertado el numero de serie ganas 500 euros";
                    }else{
                        echo "Aciertos: ".$contGan;
                        echo "<br>";
                        echo "Lo siento, no has ganado nada";
                    }
                            
                }
        }

}
        ?>
</body>
</html>