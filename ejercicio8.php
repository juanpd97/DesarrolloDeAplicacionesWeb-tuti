<?php

function cantidadSegundos($fecha1, $fecha2) {
    $t1 = strtotime($fecha1);
    $t2 = strtotime($fecha2);

    $diferencia = $t2 - $t1;

    return abs($diferencia);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>calcular segundos</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Calcular segundos entre dos fechas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="fecha1">Ingrese la primera fecha (Formato: YYYY-MM-DD HH:MM:SS):</label>
        <input type="text" id="fecha1" name="fecha1" required>
        <br>
        <label for="fecha2">Ingrese la segunda fecha (Formato: YYYY-MM-DD HH:MM:SS):</label>
        <input type="text" id="fecha2" name="fecha2" required>
        <br>
        <input type="submit" value="calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fecha1"]) && isset($_POST["fecha2"])) {
        $fecha1 = $_POST["fecha1"];
        $fecha2 = $_POST["fecha2"];
        
        $segundos = cantidadSegundos($fecha1, $fecha2);
        echo "<p>Segundos entre las dos fechas: $segundos segundos.</p>";
    }
    ?>

</body>
</html>

