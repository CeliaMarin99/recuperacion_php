<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr {
            border: solid 1px greenyellow;
        }
    </style>
</head>
<body>

    <h1>Juega a la lotería primitiva</h1>

    <form action="loteria.php" method="post">
        <table>
            
            <?php
            //Genera la tabla con todos los números 
            for($i=1; $i<=49; $i++){
            ?>
                <td>
                <?=$i?> <input type="checkbox" name="numero[]" value="<?=$i?>">
                </td>
            <?php
                if($i%7 == 0){
                    echo "<tr></tr>";
                }

            }
            
            ?>
        </table>
        
        <br>

        <label for="">Serie:</label>
        <input type="number" min="1" max="999" name="serie">

        <br>
        <input type="submit" name="jugar" value="Jugar">
    </form>
</body>
</html>