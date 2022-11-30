<?php

$name = "Yirsis Serrano";

function splitName(string $name)
{
    return explode(" ", $name);
}

$newName = splitName($name);

echo "Bienvenido $name";

var_dump($newName);