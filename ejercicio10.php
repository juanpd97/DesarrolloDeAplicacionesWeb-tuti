<?php
/*
Ejercicio 10 (10 puntos)
Escriba una función devuelva los N números pasados como parámetros de la sucesión de Fibonacci.
*/

function fibonacci($x) {
    $x0 = 0;
    $x1 = 1;
    $aux;

    echo $x0;

    for ($i = 0; $i < $x; $i++) {
        echo ' ';
        echo $x1;
        $aux = $x0 + $x1;
        $x0 = $x1;
        $x1 = $aux;
    }
}

if (isset($_POST["cantidadNumeros"])) {
    $cantidadNumeros = $_POST["cantidadNumeros"];
} else {
    $cantidadNumeros = 0;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sucesión de Fibonacci</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #formulario {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="formulario">
        <h1>Sucesión de Fibonacci</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="cantidadNumeros">Ingrese la cantidad de números:</label>
            <input type="number" id="cantidadNumeros" name="cantidadNumeros" required>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($cantidadNumeros > 0) {
            echo "<p>sucesión de fibonacci:</p>";
            echo "<p>";
            fibonacci($cantidadNumeros);
            echo "</p>";
        }
        ?>
    </div>
</body>
</html>
