<?php

require __DIR__ . "/../src/Calculator.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = ADDITION;

        $expected = 2;

        $calculator = new Calculator();
        echo $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
        $this->assertEquals($expected, $result);
    }
}