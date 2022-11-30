<?php

include __DIR__."./../../src/controllers/FizzBuzz.php";

use \PHPUnit\Framework\TestCase;

/*
 * Escribir un programa que muestre en pantalla los números del 1 al 100, sustituyendo los múltiplos de 3 por la palabra “fizz”, los múltiplos de 5 por “buzz” y los múltiplos de ambos, es decir, los múltiplos de 3 y 5 (o de 15), por la palabra “fizzbuzz”.
 *
 * 1. Muestre en pantalla los números del 1 al 100 * Implementación
 * 2. Sustituyendo los múltiplos de 3 por la palabra “fizz” * Atendido
 * 3. Los múltiplos de 5 por “buzz” * Atendido
 * 4. Los múltiplos de 3 y 5 (o de 15), por la palabra “fizzbuzz”. * Atendido
 * 5. Los numeros que no son multiplos se quedan como numeros. * Atendido
 */

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     * @dataProvider multiplosDe3
     */
    public function sustituirMultiplosDe3PorPalabraFizz($multiplo, $esperado)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute($multiplo);

        $this->assertEquals($esperado, $result);
    }

    public function multiplosDe3()
    {
        return [
            [3, 'fizz'],
            [6, 'fizz'],
            [9, 'fizz'],
            [12, 'fizz'],
        ];
    }

    /**
     * @test
     * @dataProvider multiplosDe5
     */
    public function sustituirMultiplosDe5PorPalabraBuzz($multiplo, $esperado)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute($multiplo);

        $this->assertEquals($esperado, $result);
    }

    public function multiplosDe5()
    {
        return [
            [5, 'buzz'],
            [10, 'buzz'],
            [20, 'buzz'],
        ];
    }

    /**
     * @test
     * @dataProvider multiplosDe15
     */
    public function sustituirMultiplosDe15PorPalabraFizzBuzz($multiplo, $esperado)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute($multiplo);

        $this->assertEquals($esperado, $result);
    }

    public function multiplosDe15()
    {
        return [
            [15, 'fizzbuzz'],
            [30, 'fizzbuzz'],
            [45, 'fizzbuzz'],
        ];
    }

    /**
     * @test
     * @dataProvider noMultiplos
     */
    public function losNoMultiplosSeQuedanIgual($multiplo, $esperado)
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute($multiplo);

        $this->assertEquals($esperado, $result);
    }

    public function noMultiplos()
    {
        return [
            [1, 1],
            [2, 2],
            [4, 4],
        ];
    }
}


