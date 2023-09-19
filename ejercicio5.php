<?php

/*
Realizar una función que genere una contraseña alfanumérica random de longitud variable . La contraseña deberá 
respetar el siguiente criterio:
- Poseer al menos un carácter especial, 
- Poseer letras Mayúsculas Minúsculas 
- Poseer al menos un número.
- Longitud mínima 8 caracteres

*/

function esCaracterEspecial($caracter) {
    $caracteresEspeciales = '!@#$%^&*()_+[]{}|;:,.<>?';
    return strpos($caracteresEspeciales, $caracter) !== false;
}

function randomPass(&$password) {
    $mayuscula = false;
    $minuscula = false;
    $numero = false;
    $caracterEspecial = false;

    $caracteresPermitidos = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()_+[]{}|;:,.<>?';

    while (!(($mayuscula && $minuscula && $numero && $caracterEspecial) && strlen($password) >= 8)) {
        $indiceAleatorio = rand(0, strlen($caracteresPermitidos) - 1);
        $caracterAleatorio = $caracteresPermitidos[$indiceAleatorio];
        

        if (!$mayuscula && ctype_upper($caracterAleatorio)) {
            $mayuscula = true;
        } elseif (!$minuscula && ctype_lower($caracterAleatorio)) {
            $minuscula = true;
        } elseif (!$numero && is_numeric($caracterAleatorio)) {
            $numero = true;
        } elseif (!$caracterEspecial && esCaracterEspecial($caracterAleatorio)) {
            $caracterEspecial = true;
        }

        $password .= $caracterAleatorio;

    }
}

$password = '';
randomPass($password);


echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
echo '<h1 style="color:red">Contraseña:</h1>';
echo '<h3>' . $password . '</h3>';
echo '</div>';

?>