<?php
include "includes/header.php";

$usuario=[
    "nombre"=>"Pepe",
    "nivel"=>2,
    "permisos"=>[
        "administrador"=>true,
        "cliente"=>false
    ]
];

$v1=[];
$v2=["Pepe","Eva","Tomas"];

var_dump(empty($usuario));
echo "<br>";

var_dump(isset($usuario6));
echo "<br>";

var_dump(isset($usuario['nivel']));


include "includes/footer.php";