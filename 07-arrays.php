<?php
include "includes/header.php";

$ls1=[];
$producto=["cocaCola","Fanta","Sprite"];

echo '<prev>'.var_dump($producto).'</prev> <br>';

echo $producto[0].'<br>';

//agregar al final
array_push($producto, "Tinto");

//agregar al principio
array_unshift($producto, "Cerveza");
echo '<prev>'.var_dump($producto).'</prev> <br>';

include "includes/footer.php";