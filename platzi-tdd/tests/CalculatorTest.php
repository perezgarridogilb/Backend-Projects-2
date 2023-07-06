<?php

use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase {
    public function testAddWillReturnTheSumOfItsParameter() {
        $sut = new Calculator();
        $this->assertEquals( 8, $sut->add(5, 3)) ;
    }

    public function testAddWillReturnTheMultiplyItsParameter() {
        $sut = new Calculator();

        $this->assertEquals(9, $sut->multiply(3, 3));
        $this->assertEquals(20, $sut->multiply(5, 4));
    }
}