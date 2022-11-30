<?php

/**
 * OCP: OPEN/CLOSE Principle
 */

interface IBotella
{
    public function setColor(string $color): void;

    public function getColor(): string;

    public function setSabor(string $sabor): void;

    public function getSabor(): string;
}

class BotellaAgua implements IBotella
{
    private $color;

    private $sabor;

    public function __construct($color, $sabor)
    {
        $this->color = $color;
        $this->sabor = $sabor;
    }

    public function setColor(string $color): void
    {
    }

    public function getColor(): string
    {
        return '';
    }

    public function setSabor(string $sabor): void
    {
    }

    public function getSabor(): string
    {
        return '';
    }
}

class BotellaRefresco implements IBotella
{
    private $color;

    private $sabor;

    private $gas = true;

    public function __construct($color, $sabor)
    {
        $this->color = $color;
        $this->sabor = $sabor;
    }

    public function setColor(string $color): void
    {
    }

    public function getColor(): string
    {
        return '';
    }

    public function setSabor(string $sabor): void
    {
    }

    public function getSabor(): string
    {
        return '';
    }

    public function getGas()
    {
        return $this->gas;
    }
}

class Embotelladora
{
    private $liquido;

    public function __construct(IBotella $liquido)
    {
        $this->liquido = $liquido;
    }
}

$botellaAgua = new BotellaAgua('Incolora', 'Insabora');

$embotellarAgua = new Embotelladora($botellaAgua);

$botellaRefresco = new BotellaRefresco('Incolora', 'Insabora');

$botellaRefresco->getGas();

$embotellarRefresco = new Embotelladora($botellaRefresco);