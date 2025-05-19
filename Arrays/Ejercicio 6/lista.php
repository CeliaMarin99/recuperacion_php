<?php 
if(!isset($_REQUEST['curriculums'])){
    header('location: index.php');
}else{
    //Recojo el array
    $curriculums= unserialize(base64_decode($_REQUEST['curriculums']));   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de currículums</h1>
    <table>
        <?php 
        foreach($curriculums as $dni => $curriculum){
        ?>
            <tr>
                <td><?=$dni?></td>
                <td>
                    <form action="verDatos.php" method="post">
                        <input type="hidden" name="dni" value="<?=$dni?>">
                        <input type="hidden" name="curriculum" value="<?= base64_encode(serialize($curriculum)) ?>">
                        <input type="submit" name="verDatos" value="Elegir">
                    </form>
                </td>

            </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>
<?php 
}
?>