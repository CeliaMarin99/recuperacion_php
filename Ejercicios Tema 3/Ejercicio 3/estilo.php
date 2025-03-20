<?php 
if(isset($_REQUEST['generar'])){

    $alineacion = $_REQUEST['alineacion'];
    $fondo = $_REQUEST['fondo'];
    $letra = $_REQUEST['letra'];
    $imagen = $_REQUEST['imagen'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p,h1 {
            text-align: <?=$alineacion?>;
        }
    </style>
</head>
<body style="font-family: <?=$letra?>; background-color: <?=$fondo?>;">

    <h1>Bienvenido a tu página web</h1>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit reiciendis sed repellendus eveniet quam, porro inventore, nulla aperiam nostrum tempora, quaerat provident ipsa laborum molestiae neque voluptas dolorem minima iure?</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab eveniet quaerat nulla provident voluptatibus eius eos est facere, sapiente corrupti sequi sunt sint? Vel, itaque amet vero autem saepe distinctio!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime natus sed exercitationem, dolore laudantium autem veniam quod quos nam excepturi laborum, blanditiis quibusdam suscipit? Voluptate molestiae ipsum dignissimos quibusdam fuga?</p>
    
    <img src="img/<?=$imagen?>.jpeg" alt="">
</body>
</html>