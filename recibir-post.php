<?php
include "includes/header.php";

echo "<h2>Aqui recibo lo0s datos del formulario</h2>";

$fullName="";

if(isset($_POST["nombre"])) {
    $fullName.=$_POST["nombre"];
}
if(isset($_POST["apellidos"])) {
    $fullName.=' '.$_POST["apellidos"];
}

echo $fullName;


include "includes/footer.php";