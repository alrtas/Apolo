<?php

namespace Apolo\test;

class Exemplo
{
    private $var = 0;

    public function __construct()
    {
       $this->var = 1;
    }

    public function getStatus()
    {
        return $this->var;
    }
}