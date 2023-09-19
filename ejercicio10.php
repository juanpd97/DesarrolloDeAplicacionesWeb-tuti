<?php
/*
Ejercicio 10 (10 puntos)
Escriba una función devuelva los N números pasados como parámetros de la sucesión de Fibonancci.
*/

function fibonancci($x){

    $x0=0;
    $x1=1;
    $aux;
    
    print_r($x0);

    for($i=0; $i<$x ; $i++){
        print_r(' ');
        print_r($x1);
        $aux = $x0 + $x1;
        $x0 = $x1;
        $x1 = $aux;
    }
}

fibonancci(7);

?>