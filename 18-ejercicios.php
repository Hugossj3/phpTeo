<?php
include "includes/header.php";
/**
 * -Crear un array con 8 numeros enteros
 * -Recorrer el array y mostrarlo
 * -Ordenar el array (de menor a mayor) y mostrarlo
 * -Mostrar su longitud
 * -Buscar algun elemento
 * -Añadir valores al array mientras sea menor que 120
 * -Mostrar el array
 */
echo "<a href='#fin'>Fin de Pagina</a>";

$contador = 0;
$ns = [343, 345, 22, 345, 21, 2, 7, 11];
echo "Array en estado base <br>";
echo var_dump($ns).'<br>';
foreach ($ns as $n) {
    echo "$n <br>";
}

echo "Array Ordenado de menor a mayor<br>";
sort($ns);
foreach ($ns as $n) {
    echo "$n <br>";
}
echo "Array Ordenado de mayor a menor<br>";
rsort($ns);
foreach ($ns as $n) {
    echo "$n <br>";
    $contador++;
}

echo "La longitud del array es: $contador <br>";


echo "Buscando un numero en el array<br>";
if (in_array(rand(1,100), $ns)) {
    echo "El elemento se encuentra en el array <br>";
}else{
    echo "El elemento no se encuentra en elo array <br>";
}

echo "Agregando hasta 120 elementos<br>";

while ($contador < 120) {
    array_push($ns, rand(1,100));
    $contador++;
}
foreach ($ns as $n) {
    echo "$n <br>";
}
/*
-Comprobar si una variable esta vacia
-Si esta vacia rellernarlo con texto en minuscula
-Mostrar en Pantalla su contenido en mayuscula y en negrita
*/


if(!isset($raro)){
    $raro="variable rellenada";
}

echo '<b>',strtoupper($raro).'</b><br>';


/*
-Crear 4 variables(string,array,int y boolean)
-Mostrar por pantalla el tipo y valor de cada uno
*/
$v1="hola mundo";
$v2=5;
$v3=["Manolo",90,false];
$v4=false;


echo $v1.' es de tipo '.gettype($v1).'<br>';
echo $v2.' es de tipo '.gettype($v2).'<br>';
echo $v3.' es de tipo '.gettype($v3).'<br>';
echo $v4.' es de tipo '.gettype($v4).'<br>';

/**
 * Crea un array con el contenido de la siguiente tabla
 *   ACCION     AVENTURA     DEPORTES
 *    GTA        ASSASINS     FIFA19
 *   COD         CRASH        PES19
 *   PUGB    PRINCE OF PERSIA MOTO GP 19
 */

$juegos=[
    "Accion"=>[
        "GTA","COD","PUGB","Fornite"
    ],
    "Aventura"=>[
        "Assasins","Crash","Prince of Persia","God Of War","Elden Ring","Wukong"
    ],
    "Deportes"=>[
        "FIFA19","PES19","MOTO GP 19"
        ]
];


//$repuesto=[];


$nJuegos=array_map("count",$juegos);
$maxJuegos=max($nJuegos);
echo "<table>";
echo "<tr>";
foreach ($juegos as $k => $v) {
    echo "<th>$k</th>";
} 
echo "</tr>";

for($i=0;$i<$maxJuegos;$i++){
    echo "<tr>";
    foreach ($juegos as $categoria) {
        echo "<td>";
            if(isset($categoria[$i])){
                echo "".$categoria[$i]."";
            }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

include "includes/footer.php";
// echo "<tr>";
// foreach ($juegos as $categoria => $juego) {
//      echo "<td>$categoria</td>";
//      foreach($juego as $game){
//         array_push($repuesto, $game);
//     }
// }
// echo "</tr>";
// $contador=0;
// for($i=0;$i<count($repuesto);$i++){
//     if($i%3== 0){
//         echo "<tr>";
//     }
//     echo '<td>'.$repuesto[$contador].'</td>';
    
//     $contador+=(count($repuesto)/3);
//     if($contador>=count($repuesto)){
//         $contador-= (count($repuesto)-1);
//         echo "</tr>";
//     }
// }