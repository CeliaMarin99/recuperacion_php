<?php session_start();

if(isset($_REQUEST['nuevo'])){

    $imagen = $_REQUEST['imagen']; 
   //Generar id
   do{
        $id = "ID".rand(0,99);
   }while(array_key_exists($id, $_SESSION['productos']));

   $fp=fopen("productos.txt", "a");

   fputs($fp, $id."-".$_REQUEST['nombre']."-".$_REQUEST['precio']."-".$imagen . PHP_EOL); 
   fclose($fp); 

   header('Location: "Gestion.php');

}

if(isset($_REQUEST['eliminar'])){
     $idRecib = $_REQUEST['id'];

     unset($_SESSION['productos'][$idRecib]);//borrar producto

     //Actualizar archivo
     $fp = fopen("productos.txt", "w");

     foreach($_SESSION['productos'] as $id=>$prod){
          fputs($fp, $id."-".trim($prod[0])."-".trim($prod[1])."-".trim($prod[2]) . PHP_EOL);
     }

     fclose($fp);

     header("Location: Gestion.php");
}

if(isset($_REQUEST['modificar'])){
     $idRecib= $_REQUEST['id'];
     $nombre= $_REQUEST['nombre'];
     $precio= $_REQUEST['precio'];
     $imagen= $_REQUEST['imagen'];

     //Modificar en la sesion productos
     $_SESSION['productos'][$idRecib][0]=$nombre;
     $_SESSION['productos'][$idRecib][1]=$precio;
     $_SESSION['productos'][$idRecib][2]=$imagen;

     //Actualizar fichero
     $fp = fopen("productos.txt", "w");

     foreach($_SESSION['productos'] as $id=>$prod){
          fputs($fp, $id."-".trim($prod[0])."-".trim($prod[1])."-".trim($prod[2]) . PHP_EOL);
     }

     fclose($fp);

     header("Location: Gestion.php");
}