<?php
include "includes/header.php";

$vehiculos=["Ferrari","Tesla","McClaren","Bugatti"];

//para saber el numero de elementos del array
echo count($vehiculos).'<br>';

for($i= 0; $i < count($vehiculos); $i++){
    echo ''.$vehiculos[$i].'<br>';
}

foreach($vehiculos as $vehiculo){
    echo ''.$vehiculo.'<br>';
}

$usuario=[
    "nombre"=>"Pepe",
    "nivel"=>2,
    "permisos"=>"administrador"
];

foreach($usuario as $key => $value){
    echo $key." ".$value."<br>";
}

$productos=[
    [
        "nombre"=>"libro",
        "precio"=>24,
        "disponible"=>true,
        "oferta"=>true
    ],
    [
        "nombre"=> "revista",
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

echo '<div class="articulos">';
foreach($productos as $producto){
    ?>
    <article>
        <p>Producto: <?php echo $producto["nombre"];?></p>
        <p>Precio: <?php echo $producto["precio"];?></p>
        <p><?php echo $producto["disponible"]?"Disponible":"No Disponible"; ?></p>
        <p><?php echo $producto["oferta"]?"<span class='r'>Rebajado</span>":"Jjaja si quieres gratis"; ?></p>
        <p></p>
    </article>
    <?php
}
echo '</div>';

include "includes/footer.php";