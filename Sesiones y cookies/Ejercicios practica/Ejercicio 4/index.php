<?php session_start(); 
if(isset($_SESSION['usuario'])){
    header('Location: login.php');
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
    <h1>Bienvenido a la página principal</h1>
    <form action="login.php" method="post">
        Usuario:
        <input type="text" name="nombre">
        <br>
        Contraseña:
        <input type="password" name="contrasena">
        <br>
        <input type="submit" name="login" value="Iniciar sesión">
    </form>
</body>
</html>