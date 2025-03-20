<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elige el estilo de tu página web</h1>

    <form action="estilo.php" method="post">
        <label for="">Color de fondo:</label>
        <input type="color" name="fondo">

        <br>

        <label for="">Tipo de letra:</label>
        <input type="text" name="letra">
        <br>

        <label for="">Alineación del texto:</label>
        <input type="text" name="alineacion">

        <br>
        <label for="">Imagen</label>
        <select name="imagen" id="">
            <option value="gato">Gato</option>
            <option value="perro">Perro</option>
            <option value="conejo">Conejo</option>
        </select>

        <br>

        <input type="submit" name="generar" value="generar">

    </form>
</body>
</html>