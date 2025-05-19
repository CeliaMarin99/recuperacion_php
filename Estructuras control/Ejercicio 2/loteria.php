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
    
    $contador = 0;

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
            for($i=0; $i<=5; $i++){
            ?>
                <td><?=$ganador[$i]?></td>           
            <?php
                foreach($seleccionado as $numero){
                    if($ganador[$i] == $numero){
                        $contador++;
                    }
                }
            }
            
            ?>
        </table>

        <p>Serie: <?=$serieGan?></p>

    
        <?php 
        //Aciertos y premios
        switch($contador) { 
            case 4: 
                if($serie == $serieGan){
                    echo "Has acertado el numero de serie ganas 500 euros";
                }else{
                    echo "Aciertos: ".$contador;
                    echo "<br>";
                    echo "Has ganado, el dinero devuelto";
                }

            break; 
            case 5: 
                if($serie == $serieGan){
                    echo "Has acertado el numero de serie y 5 numeros ganas 530 euros";
                }else{
                    echo "Aciertos:".$contador;
                    echo "Has ganado, 30 euros";
                }
            break;
            case 6: 
                if($serie == $serieGan){
                    echo "Has acertado el numero de serie y todos los numeros ganas 600 euros";
                }else{
                    echo "Aciertos:".$contador;
                    echo "Has ganado, 100 euros";
                }
            break;
            default: 
                if($serie == $serieGan){
                    echo "No has acertado ninguna combinación pero, has acertado el numero de serie ganas 500 euros";
                }else{
                    echo "Aciertos: ".$contador;
                    echo "<br>";
                    echo "Lo siento, no has ganado nada";
                }
                        
        }

}
        ?>
</body>
</html>