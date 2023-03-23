<?php

use PHPUnit\Framework\TestCase;

require './src/Calculator.php';

Class CalculatorTest extends TestCase{

    public function testFactorial(){
        
        $FObj = new Calculator;
        
        $this->assertEquals(1,$FObj->Factorial(1)); 
        $this->assertEquals(720,$FObj->Factorial(6)); 
        $this->assertEquals(null,$FObj->Factorial(-3)); 
        $this->assertEquals(null,$FObj->Factorial(1.5)); 
        $this->assertEquals(null,$FObj->Factorial(true));
        $this->assertEquals(null,$FObj->Factorial('abc')); 
         
    }   
}