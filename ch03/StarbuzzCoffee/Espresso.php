<?php

class Espresso extends Beverage {
    public function __construct()
    {
        $this->description ="Espresso";
    }

    public function cost(){
        return 1.99;
    }
}