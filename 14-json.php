<?php

include "includes/header.php";

//JSON-> Es un formato ligero de intercambio de datos


$productos=[
    [
        "nombre"=>"libro entrañable",
        "precio"=>24,
        "disponible"=>true,
        "oferta"=>true
    ],
    [
        "nombre"=> "revista albúm",
        "precio"=>18,
        "disponible"=>true,
        "oferta"=>false
    ],
    [
        "nombre"=> "folios",
        "precio"=>50,
        "disponible"=>false,
        "oferta"=>false
    ]
];

$productos_json=json_encode($productos,JSON_UNESCAPED_UNICODE);

echo '<pre>';
echo var_dump($productos_json).'';
echo '</pre>';

$productos_array=json_decode($productos_json,true); 

echo '<pre>';
echo var_dump($productos_array).'';
echo '</pre>';


include "includes/footer.php";