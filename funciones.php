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


//funcion ejercicio 5 y 6
function esCaracterEspecial($caracter) {
    $caracteresEspeciales = '!@#$%^&*()_+[]{}|;:,.<>?';
    return strpos($caracteresEspeciales, $caracter) !== false;
}


function tieneConsecutivos($cadena) {
    $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud - 1; $i++) {
        $x1 = ord($cadena[$i]);
        $x2 = ord($cadena[$i + 1]);

        if ($x2 - $x1 == 1) {
            return true; 
        }
    }
    return false; 
}
?>