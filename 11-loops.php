<?php
include "includes/header.php";

//for
for ($i = 0; $i < 10; $i++) {
    echo $i.'<br>';
}

$i=0;   
while ($i <= 10) {
    echo $i.'<br>';
    $i++;
}

/*
Imprimir n numjeros de tal manera de que 
-si n es multiplo de 3 imprimir n-FIZZ
-si n es multiplo de 5 imprimir n-BUZZ
-si n es multiplo de 3 y de 5 imprimir n-FIZZ BUZZ
*/
$n= 100;
for ($i=0;$i<$n; $i++) {
    if($i%3==0 && $i%5== 0) {
        echo $i.'-FIZZ BUZZ<br>';
    }elseif($i%3==0) {
        echo $i.'-FIZZ<br>';
    }elseif($i%5== 0) {
        echo $i.'-BUZZ<br>';
    }else{
        echo $i.'<br>';
    }
} 

echo '<p>Claude</p>';
function fizzBuzz($start,$end){
    for ($i=$start;$i< $end;$i++) {
        $salida='';
        if($i%3 == 0) $salida.="fizz";
        if($i%5 == 0) $salida.="buzz";

        echo $salida == ""?$i:"$i $salida";
        echo "<br>";
    }
}
fizzBuzz(1,100);
include "includes/footer.php";