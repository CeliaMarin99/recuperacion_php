<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <h1>Prueba suerte en la lotería</h1>

    <form action="loteria.php" method="post">
        <label for="">Introduze los números:</label>
        <input type="number" min="1" max="49" placeholder="1-49" name="num1"> 
        <input type="number" min="1" max="49" placeholder="1-49" name="num2">
        <input type="number" min="1" max="49" placeholder="1-49" name="num3">
        <input type="number" min="1" max="49" placeholder="1-49" name="num4">
        <input type="number" min="1" max="49" placeholder="1-49" name="num5">
        <input type="number" min="1" max="49" placeholder="1-49" name="num6">
        <br>
        <label for="">Numero de serie:</label>
        <input type="number"  min="1" max="999" placeholder="1-999" name="serie">

        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>