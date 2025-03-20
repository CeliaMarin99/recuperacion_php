<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular tiempo para llenar un cilindro</h1>
    <form action="calcular.php" method="post">
        <label for="">Diametro:</label>
        <input type="number" name="diametro" required>
        <br>
        <label for="">Altura:</label>
        <input type="number" name="altura" required>
        <br>
        <label for="">Litros por minuto:</label>
        <input type="number" name="litros" required>

        <br>
        <input type="submit" name="calcular" value="calcular">

    </form>
</body>
</html>