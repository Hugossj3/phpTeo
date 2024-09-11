<?php
include "includes/header.php";

// $_GET - contiene parametros pasados atraves de la url

// $_POST - Contiene valores pasados a traves del http post

//$_REQUEST - Contiene los valores del $_GET, $_POST y $_COOKIE
//$_COOKIE - Contiene valores pasados atraves de http cookie
//$_SESSION - contiene variables disponibles para el script actual
//$_SERVER - contiene informacion sobre el entorno del servidor



$user_ip=$_SERVER['REMOTE_ADDR'];
$server_name=$_SERVER['SERVER_NAME'];

echo 'Direccion IP:'.$user_ip.'';
echo 'Nombre del Servidor'.$server_name.'';

// echo '<ul>';
// foreach($_SERVER as $key => $value) {
//     echo "<li>Clave $key, Valor $value</li>";
// }
// echo '</ul>';

$path=$_ENV['PATH'];
if(isset($path)) {
    echo 'PATH:'.$path.'';
}else{
    echo "La variable no esta disponible";
}
include "includes/footer.php";