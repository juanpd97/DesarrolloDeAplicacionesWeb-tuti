<?php
session_start();

//juan 1234


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST["username"] == "juan" && $_POST["password"] == "1234"){
        
        header("Location: privado.php");    
        exit;
    } else{
        $_SESSION["loginFallido"] = true;
        header("location: index.php");
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
</body>
</html>