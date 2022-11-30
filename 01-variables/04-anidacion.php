<?php

function anidacion()
{
    $day = "martes";

    if (empty($day)) {
        return false;
    }

    $openingDays = ["lunes", "martes", "miercoles", "jueves", "viernes"];

    return in_array(strtolower($day), $openingDays, true);
}

echo anidacion() ? "Abierto" : "Cerrado";
