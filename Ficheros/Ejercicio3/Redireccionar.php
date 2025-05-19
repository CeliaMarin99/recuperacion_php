<?php session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: Gestion.php');
    }else{
        header('Location: login.php');
    }

    if(isset($_REQUEST['cerrar'])){
            session_destroy();
            setcookie("usuario", "", time() - 3600, "/");
            header('Location: index.php');
        }
?>