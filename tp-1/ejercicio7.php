<?php

function tiempoRestante($fecha){
    if (strtotime($fecha) === false) {
        return "Fecha y hora no válidas";
    }

    $fechaFinal = strtotime($fecha);
    $fechaActual = time(); 

    $diferencia = $fechaFinal - $fechaActual;

    $dias = floor($diferencia / (60 * 60 * 24));
    $horas = floor(($diferencia % (60 * 60 * 24)) / (60 * 60));
    $minutos = floor(($diferencia % (60 * 60)) / 60);
    $segundos = $diferencia % 60;

    $tiempoRestante = "$dias días, $horas horas, $minutos minutos y $segundos segundos";

    return $tiempoRestante;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuenta Regresiva</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>
<body>

        <div>
    <h1>Cuenta Regresiva</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="fechaFinal">Ingrese la fecha objetivo (Formato: YYYY-MM-DD HH:MM:SS):</label>
        <input type="text" id="fechaFinal" name="fechaFinal" required>
        <br><br>
        <input type="submit" value="Calcular Cuenta Regresiva">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fechaFinal"])) {
        $fechaFinal = $_POST["fechaFinal"];
        $cuentaRegresiva = tiempoRestante($fechaFinal);
        echo "<p>Cuenta regresiva para la fecha ingresada: $cuentaRegresiva</p>";
    }
    ?>
    </div>
</body>
</html>

