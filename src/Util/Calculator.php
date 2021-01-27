<?php

namespace App\Util;

use DivisionByZeroError;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
    public function subtract($a, $b)
    {
        return $a - $b;
    }
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function division($a, $b)
    {
        return $a / $b;
    }
    public function modulous($a, $b)
    { 
        try{
            $ans = $a % $b;
            return $ans;
        }
        catch(DivisionByZeroError $e)
        {
            return $e->getMessage();
        }
    }
}