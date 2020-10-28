<?php

class Espresso extends Beverage {
    public function __construct()
    {
        $this->description ="Espresso";
    }

    public function cost(): float{
        return 1.99;
    }
}