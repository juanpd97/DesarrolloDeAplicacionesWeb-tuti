<?php

/*
Ejercicio 6 (10 puntos)
Escribir una función que evalúe la fortaleza de una contraseña como: Muy Fuerte, Fuerte, Normal, débil, muy débil.
Los criterios para la fortaleza son:
• Cantidad de caracteres
• Letras mayúsculas, minúsculas, números y caracteres especiales
• Letras y números no consecutivos
*/
include('funciones.php');

function fortalezaDeContrasena($pass){
    $longitud = strlen($pass);
    $mayuscula = false;
    $minuscula = false;
    $numero = false;
    $caracteresEspecial = false;

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $pass[$i];

        if (is_numeric($caracter)) {
            $numero = true;
        } elseif (ctype_lower($caracter)) {
            $minuscula = true;
        } elseif (ctype_upper($caracter)) {
            $mayuscula = true;
        } elseif (esCaracterEspecial($caracter)) {
            $caracteresEspecial = true;
        }
    }

    if ($longitud >= 13 && $longitud <= 16 && $caracteresEspecial && $mayuscula && $minuscula && $numero && !tieneConsecutivos($pass)) {
        return "Muy Fuerte";
    } elseif ($longitud >= 9 && $caracteresEspecial && ($mayuscula || $minuscula) && $numero) {
        return "Fuerte";
    } elseif (($longitud >= 6 && $longitud <= 8) || (!$caracteresEspecial && $longitud >= 6)) {
        return "Normal";
    } elseif ($longitud < 6 || tieneConsecutivos($pass)) {
        return "Débil";
    } else {
        return "Muy Débil";
    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación de Contraseña</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1, form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Evaluación de Contraseña</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="contrasena">Ingrese su contraseña:</label>
            <input type="text" id="contrasena" name="contrasena" required>
            <input type="submit" value="Evaluar Contraseña">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contrasena"])) {
            $contrasena = $_POST["contrasena"];
            $fortaleza = fortalezaDeContrasena($contrasena);
            echo "La fortaleza de la contraseña es: $fortaleza";
        }
        ?>
    </div>
</body>
</html>

