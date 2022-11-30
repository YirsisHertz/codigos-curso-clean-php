<?php

class Car
{
    private $make = 'Honda';

    private $model = 'Accord';

    private $color = 'white';

    public function setMake(string $make)
    {
        $this->make = $make;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function dump(): void
    {
        var_dump($this);
    }
}

$car = new Car();
$car->setMake("FORD");
$car->setModel("F123");
$car->setColor("Black");
echo $car->getColor();