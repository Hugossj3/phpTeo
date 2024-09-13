<?php
    require_once 'check.php';
    if(is_logged_in()){
        header('Location:welcome.php');
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inicion de Sesion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="scp/scpformu.css">
    </head>
    <body>
        <div class="login-container">
            <h1>Inicio de Sesion</h1>
            <form id="loginForm">
                <input type="text" placeholder="Nombre del usuario" id="username" required>
                <input type="password" placeholder="Contraseña" id="password">
                <button type="submit">Iniciar Sesion</button>
            </form>
        </div>
        
        
        <script src="js/funciones.js"></script>
    </body>
</html>