<?php

namespace App\tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;
    
    function createobject()
    {
        $this->calculator = new Calculator();
    }
    public function testadd()
    {
        $this->createobject();
        $result = $this->calculator->add(30,12);
        $this->assertEquals(42, $result); 
    }
    public function testsubtract()
    {
        $this->createobject();
        $result = $this->calculator->subtract(30,12);
        $this->assertEquals(18, $result); 
    }
    public function testmultiply()
    {
        $this->createobject();
        $result = $this->calculator->multiply(30,12);
        $this->assertEquals(360, $result); 
    }
    public function testdivision()
    {
        $this->createobject();
        $result = $this->calculator->division(30,6);
        $this->assertEquals(5, $result); 
    }
    public function testmodulous()
    {
        $this->createobject();
        $result = $this->calculator->modulous(30,0);
        $this->assertEquals("Modulo by zero", $result); 
        $result = $this->calculator->modulous(30,6);
        $this->assertEquals(0, $result);
    }
}