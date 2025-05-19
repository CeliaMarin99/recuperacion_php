<?php 
if(!isset($_REQUEST['pedir'])){
    $pedido = [];
}else{
    $pedido=unserialize(base64_decode($_REQUEST['pedido']));
	$pedido[]= $_REQUEST['ingredientes'];
    print_r($pedido);
}

$carta = [
["Pizza", "Bacon", "Piña", "Pollo", "Peperoni"],
["Hamburguesa","Lechuga", "Pollo", "Ternera", "Mayonesa"],
["Bocadillo","Pollo", "Mayonesa", "Queso", "Bacon"]
];

if(isset($_REQUEST['finalizar'])){
    $pedido=unserialize(base64_decode($_REQUEST['pedido']));
    foreach ($pedido as $comida) {
		echo $comida[0]." con: ";
		for ($i=1; $i < count($comida) ; $i++) {
			echo $comida[$i].", ";
		}
		echo "<br>";
	}
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
    <h1>Mi restaurante</h1>
    
    <?php
    foreach ($carta as $comida) {
    ?>
        <form action="" method="post">
            <label for=""><?=$comida[0]?></label>
            <input type="hidden" name="ingredientes[]" value="<?=$comida[0]?>">
            <br>
            <?php 
            for ($i = 1; $i<count($comida); $i++) {
                
            ?>
                
                <input type="checkbox" name="ingredientes[]" value="<?=$comida[$i]?>"> <?=$comida[$i]?>
            <?php
            }
            ?>
            <br>
            <input type="hidden" name="pedido" value="<?=base64_encode(serialize($pedido))?>">
            <input type="submit" value="pedir" name="pedir">
        </form>
        <hr>
    <?php
    }
    ?>

    <br>
    <form action="" method="post">
        <input type="hidden" name="pedido" value="<?=base64_encode(serialize($pedido))?>">
        <input type="submit" name="finalizar" value="finalizar">
    </form>
</body>
</html>