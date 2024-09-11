<?php
include "includes/header.php";

$texto="El submarino amarillo";

$longitud=strlen($texto);
$texto=trim($texto);
$mayus=strtoupper($texto);
$mini=strtolower($texto);
$reemplazo=str_replace("amarillo","rojo",$texto);
$encontrar=strpos($texto, "submarino");

echo "el texto es $texto<br>";
echo "Longitud: $texto<br>";
echo "Sin espacios $texto<br>";
echo "Mayusculas $mayus<br>";
echo "Minisculas $mini<br>";
echo "Reemplazo $reemplazo<br>";
echo "Esta submarino? $encontrar";

include "includes/footer.php";