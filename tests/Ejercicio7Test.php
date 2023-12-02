<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__) . '\..\Ejercicios\Ejercicio7.php';

use PHPUnit\Framework\TestCase;

class Ejercicio7Test extends TestCase
{

    private Ejercicio7 $exercise;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio7(0);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_fibonacci()
    {
        $this->assertEquals([1,1,2,3,5,8,13,21,34,55], $this->exercise->getFibonacci(10), 'Serie fibonnaci 1');
        $this->assertEquals([], $this->exercise->getFibonacci(0), 'Serie fibonnaci 2');
        $this->assertEquals([], $this->exercise->getFibonacci(-1), 'Serie fibonnaci 3');
        $this->assertEquals([1], $this->exercise->getFibonacci(1), 'Serie fibonnaci 4');
        $this->assertEquals([1,1], $this->exercise->getFibonacci(2), 'Serie fibonnaci 5');
        $this->assertEquals([1,1,2], $this->exercise->getFibonacci(3), 'Serie fibonnaci 6');
    }
}