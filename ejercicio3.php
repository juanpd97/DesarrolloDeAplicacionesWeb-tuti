<?php

/*Ejercicio 3
Realizar una función recursiva que recorra un array multidimensional (de dimensiones indefinidas) convirtiendo a
mayúscula todo el contenido del mismo.
*/

function mostrarMatriz($matriz){
    foreach($matriz as $fila){
        foreach($fila as $elemento){
            print_r($elemento);
            print_r(" ");
        }
        echo "<br>";
    }
}

function mayusculasRecursiva(&$matriz){
    if(is_array($matriz)){
        foreach($matriz as &$x){
            mayusculasRecursiva($x);
        }
    } else{
        $matriz = strtoupper($matriz);
    }
}

$matriz = [
    ["manzana", "banana", "pera"],
    ["perro", "gato", "pajaro"],
    ["rojo", "verde", "azul"]
];


mostrarMatriz($matriz);

echo "<br>";

mayusculasRecursiva($matriz);
mostrarMatriz($matriz);

?>