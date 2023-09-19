<?php
include('funciones.php');
/*Ejercicio 4 (10 puntos)
Realizar una función que realice el producto cartesiano de dos matrices de 2 dimensiones.
*/

/*
function mostrarMatriz($matriz){
    foreach($matriz as $fila){
        foreach($fila as $elemento){
            print_r($elemento);
            print_r(" ");
        }
        echo "<br>";
    }
}*/


function productoMatrices($matriz1, $matriz2, &$matrizR) {
    foreach ($matriz1 as $filaM1) { // Recorro las filas de lasmatries
        foreach ($matriz2 as $filaM2) {
            // creo un array auxiliar para guardar el resultado de operar las 2 matrices y luego agregar el array auxiliar a mi matrizResultado
            $arryAux = array();
            foreach ($filaM1 as $eM1) {
                foreach ($filaM2 as $eM2) {
                    $arryAux[] = $eM1 . $eM2;
                }
            }
            // agrego la fila auxiliar a la matrizResultado
            $matrizR[] = $arryAux;
        }
    }
}


$matrizA = array(
    array(1, 2,),
    array(3, 4),
    array(5, 6)
);

$matrizB = array(
    array('A', 'B'),
    array('C', 'D')
);

$matrizResultado;

echo "<h1>productos de matrices</h1>";
echo "<p>matriz A:</p>";
echo "<br>";
mostrarMatriz($matrizA);
echo "<br>";
echo "<p>matriz B:</p>";
mostrarMatriz($matrizB);

echo "<br>";
echo "<p>matriz resultado:</p>";

productoMatrices($matrizA,$matrizB,$matrizResultado);
mostrarMatriz($matrizResultado);

?>
