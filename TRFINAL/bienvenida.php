<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido </title>
    <link rel="stylesheet" href="style.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   
   <div class="ctn-welcome">
       
       <img src="images/logo-magtimus-small.png" alt="" class="logo-welcome">
       <h1 class="title-welcome"> <b>¡Has logrado iniciar sesión correctamente!</b></h1>
       <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
       
   </div>
   
    
</body>
</html>