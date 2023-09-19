<?php
    include('funciones.php');
    $arreglo =[
        "uno" => "lunes",
        "martes",
        "miercoles",
        "jueves",
        "viernes"
    ];

    //print_r($arreglo);
    /*
    function mayuscula(&$array){
        foreach($array as &$x){
            $x = strtoupper($x);
        }
    }
    */

    print_r('arreglo original: ');
    print_r($arreglo);

    echo "<br>";
    echo "<br>";

    print_r('arreglo pasado a mayusculas: ');
    mayuscula($arreglo);
    print_r($arreglo);

    ?>