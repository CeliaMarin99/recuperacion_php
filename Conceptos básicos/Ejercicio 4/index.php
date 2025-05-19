<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduce el precio del producto</h1>

    <form action="tienda.php" method="post">
        <label for="">Tienda 1:</label>
        <input type="number" name="tienda1">

        <br>

        <label for="">Tienda 2:</label>
        <input type="number" name="tienda2">
        <br>
        <label for="">Tienda 3:</label>
        <input type="number" name="tienda3">
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>