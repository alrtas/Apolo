<?php

use PHPUnit\Framework\TestCase;
use Apolo\test;

class ExemploTest extends TestCase
{

    private  $teste;
    
    public function testAssert()
    {
        $teste = new Exemplo();

        self::assertEquals(1, $this->$test->getStatus());
    }

}