<?php
require_once "./../helpers/Math.php";

$math = new Math(10, 3);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>

<h1>Calculadora.</h1>

<h3>Suma: <?php $math->viewSum(); ?></h3>
<h3>Resta: </h3>
<h3>Multiplicación: </h3>
<h3>División: </h3>

</body>
</html>
