<?php
declare(strict_types=1);
include "includes/header.php";

echo "<h2>Funciones</h2>";


function sumar(int $n1,int $n2) {
    echo $n1+$n2.'<br>';
}
function restar(int $n1,int $n2):int {
    return $n1-$n2;
}
sumar(2,7);
echo restar(7,3).'<br>';

include "includes/footer.php";