<?php

use PHPUnit\Framework\TestCase;

include __DIR__."./../../helpers/Math.php";

class MathTest extends TestCase
{
    /**
     * @test
     * @covers
     */
    public function sumaDeDosNumerosEnteros()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(40, 10);

        // 2. Act = Actuar
        $resultSum = $math->sum();

        // 3. Assert = Comprobar
        $this->assertEquals(50, $resultSum);
    }

    /**
     * @test
     * @covers
     */
    public function sumaDeDosNumerosFlotantes()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(3.8, 5.5);

        // 2. Act = Actuar
        $resultSum = $math->sum();

        // 3. Assert = Comprobar
        $this->assertEquals(9.3, $resultSum);
    }

    /**
     * @test
     * @covers
     */
    public function restaDeDosNumeros()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(5, 2);

        // 2. Act = Actuar
        $result = $math->dissmiss();

        // 3. Assert = Comprobar
        $this->assertEquals(3, $result);
    }

    /**
     * @test
     * @covers
     */
    public function multiplicacionDeDosNumeros()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(5, 5);

        // 2. Act = Actuar
        $result = $math->multiply();

        // 3. Assert = Comprobar
        $this->assertEquals(25, $result);
    }

    /**
     * @test
     * @covers
     */
    public function divisionDeDosNumeros()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(5, 2);

        // 2. Act = Actuar
        $result = $math->division();

        // 3. Assert = Comprobar
        $this->assertEquals(2.5, $result);
    }

    /**
     * @test
     * @covers
     */
    public function divisionUnNumeroEntreCero()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(5, 0);

        // 2. Act = Actuar
        $this->expectException(DivisionByZeroError::class);
        $this->expectExceptionMessage("No puedes dividir entre cero");

        // 3. Assert = Comprobar
        $math->division();
    }

    /**
     * @test
     * @covers
     */
    public function verificarQueSeImprimaLaSumaConUnFormato()
    {

        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(4, 3);

        // 2. Act = Actuar

        // 3. Assert = Comprobar
        $this->expectOutputString("La suma obtenida de 4 + 3 es igual a 7");

        $math->viewSum();
    }

    /**
     * @test
     * @covers
     */
    public function pruebaRiesgo()
    {
        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(3.8, 5.5);

        // 2. Act = Actuar
        $resultSum = $math->pruebaLenta();

        // 3. Assert = Comprobar
        $this->assertEquals(9.3, $resultSum);
    }

    /**
     * @test
     * @requires PHP >= 8.1
     * @covers
     */
    public function pruebaOmitida()
    {
        // AAA Pattern - Patrón de las 3 A

        // 1. Arrange = Organizar o Inicializar
        $math = new Math(3.8, 5.5);

        // 2. Act = Actuar
        $resultSum = $math->pruebaLenta();

        // 3. Assert = Comprobar
        $this->assertEquals(9.3, $resultSum);
        //$this->markTestSkipped("Esta prueba esta siendo omitida porque no es necesaria");
    }

    /**
     * @test
     */
    public function generaUnNumeroAleatorio()
    {
        // Arrange
        $mathMock = $this->getMockBuilder(Math::class)->setConstructorArgs([0, 0])->getMock();
        $mathMock->expects($this->once())->method("getRandom")->willReturn(10);

        // Act
        $result = $mathMock->getRandom();

        // Assert
        $this->assertEquals(10, $result);
    }
}

