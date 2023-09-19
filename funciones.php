<?php

//funcion ejercicio 1
function mayuscula(&$array){
    foreach($array as &$x){
        $x = strtoupper($x);
    }
}


//funcion utilizada en ejercicio 2
function mostrarMatriz($matriz) {
    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            print_r($elemento);
        }
        echo "<br>";
    }
}


?>