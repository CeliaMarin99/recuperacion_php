<?php session_start();

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Aquí iría tu validación con base de datos o archivo

    if ($usuario == 'admin' && $clave == '1234') {
        $_SESSION['usuario'] = $usuario;

        // Guardar cookie persistente por 30 días
        setcookie('usuario', $usuario, time() + (86400 * 30), "/");

        header("Location: Gestion.php");
    }
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
    <h1>Inicie sesión</h1>
    <form action="" method="post">
        Usuario:
        <input type="text" name="usuario">
        <br>
        Contraseña:
        <input type="password" name="clave">
        <br>
        <input type="submit" name="iniciar" value="INICIAR SESIÓN">
    </form>
</body>
</html>