<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduzca los datos del Cilindro en cm</h1>

    <form action="calcular.php" method="post">
        <label for="">Altura:</label>
        <input type="number" name="altura" required>

        <br>
        <label for="">Diametro:</label>
        <input type="number" name="diametro">
        <br>
        <input type="submit" name="calcular" value="Calcular">

    </form>
</body>
</html>