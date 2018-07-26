<?php

class DarkRoast extends Beverage {
    public function __construct()
    {
        $this->description ="Espresso";
    }

    public function cost(){
        return 0.99;
    }
}