<?php
    include "includes/header.php";

    echo "<h2>Tipos de datos en PHP</h2>";

    //Boolean
    $isAuthorized=false;
    echo "$isAuthorized";
    var_dump($isAuthorized);
    echo "</br>";

    //Enteros
    $numero=200;
    echo "<p>El número es:$numero y es un numero entero</p>";
    var_dump($numero);
    echo "</br>";

    //Floats
    $decimal=3.14;
    var_dump($decimal);
    echo "</br>";

    //Strings
    $nombre="Hugo";
    var_dump($nombre);
    echo "</br>";

    //Array
    $ls=[1,2,3];
    $ls2=array("fersa","piña","pera");
    var_dump($ls);
    echo "</br>";
    var_dump($ls2);



    include "includes/footer.php";
?>