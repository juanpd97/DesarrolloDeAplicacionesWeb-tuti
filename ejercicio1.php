<?php

    $arreglo =[
        "uno" => "lunes",
        "martes",
        "miercoles",
        "jueves",
        "viernes"
    ];

    //print_r($arreglo);

    function mayuscula(&$array){
        foreach($array as &$x){
            $x = strtoupper($x);
        }
    }

    mayuscula($arreglo);

    print_r($arreglo);

    ?>