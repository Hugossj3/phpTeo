<?php
include "includes/header.php";

$frutas=["fresa","platano","uva"];
$existe=in_array("uva",$frutas);
$usuario=[
    "nombre"=>"Pepe",
    "nivel"=>2,
    "permisos"=>[
        "administrador"=>true,
        "cliente"=>false
    ]
];

if($existe){
    echo "<p>El elemento existe</p><br>";
}

sort($frutas);
echo '<prev>'.var_dump($frutas).'<br>';

rsort($frutas);
echo '<prev>'.var_dump($frutas).'<br>';

sort($usuario);
echo '<prev>'.var_dump($usuario).'<br>';

asort($usuario);
echo '<prev>'.var_dump($usuario).'<br>';

include "includes/footer.php";