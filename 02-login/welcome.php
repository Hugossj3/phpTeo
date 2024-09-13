<?php
    require_once 'check.php';
    echo require_login() ;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bienvenido</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="scp/scpformu.css">
    </head>
    <body>
        <div class="welcome-container">
            <h1>Bienvenido <?php 
            $username=$_SESSION["user"];
            echo"".$username."";
            ?></h1>
            <p>Has iniciado sesion con exito</p>
            <a href="logout.php">Cerrar Sesion</a>
        </div>
        <script src="" async defer></script>
    </body>
</html>