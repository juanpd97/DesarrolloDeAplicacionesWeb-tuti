<?php

// Función del ejercicio 1
function mayuscula(&$array) {
    foreach ($array as &$x) {
        $x = strtoupper($x);
    }
}

// Función para mostrar matriz en pantalla
function mostrarMatriz($matriz) {
    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            print_r($elemento);
        }
        echo "<br>";
    }
}


//funcion para pasar una matriz a mayuscula
function matrizMayuscula(&$matriz){
    foreach($matriz as &$fila){
        mayuscula($fila);
    }
}


$matriz = [
    ["manzana", "banana", "pera"],
    ["perro", "gato", "pajaro"],
    ["rojo", "verde", "azul"]
];


mostrarMatriz($matriz);
echo "<br>";
echo "<br>";
matrizMayuscula($matriz);
mostrarMatriz($matriz);

?>
