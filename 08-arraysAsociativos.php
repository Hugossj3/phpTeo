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

echo '<prev>'.var_dump($usuario).'</prev>';
include "includes/footer.php";