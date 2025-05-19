<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: solid 2px black;
        }

    </style>
</head>
<body>
    <table>
    <?php 
    for($i=1; $i<=10; $i++){

      for($j=1; $j<=7; $j++){
       ?>
       <tr>
            <td>Bloque <?=$i?></td>
            <td>Piso <?=$j?></td>
            <td>
                <form action="llamar.php" method="post">
                    <input type="hidden" name="bloque" value="<?=$i?>">
                    <input type="hidden" name="piso" value="<?=$j?>">
                    <input type="submit" name="llamar" value="Llamar">
                </form>
            </td>
       </tr>
       <?php 
       
      }
        
    }
    
    ?>
    </table>
</body>
</html>