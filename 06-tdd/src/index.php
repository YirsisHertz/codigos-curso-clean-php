<?php

require_once "controllers/FizzBuzz.php";

$fizzBuzz = new FizzBuzz();

for ($iterator = 1; $iterator <= 100; $iterator++) {
    echo $fizzBuzz->execute($iterator)."\n";
}

