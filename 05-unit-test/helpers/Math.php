<?php

class Math
{
    private $firstValue;

    private $secondValue;

    public function __construct(float $firstValue, float $secondValue)
    {
        $this->firstValue = $firstValue;
        $this->secondValue = $secondValue;
    }

    public function sum()
    {
        return $this->firstValue + $this->secondValue;
    }

    public function dissmiss()
    {
        return $this->firstValue - $this->secondValue;
    }

    public function multiply()
    {
        return $this->firstValue * $this->secondValue;
    }

    public function division()
    {
        if ($this->secondValue == 0) {
            throw new DivisionByZeroError("No puedes dividir entre cero");
        }

        return $this->firstValue / $this->secondValue;
    }

    public function viewSum()
    {
        echo "La suma obtenida de {$this->firstValue} + {$this->secondValue} es igual a {$this->sum()}";
    }

    public function pruebaLenta()
    {

        for ($i = 0; $i <= 1000; $i++) {
        }

        return $this->sum();
    }

    public function getRandom(): int
    {
        return rand(5, 20);
    }
}