<?php

class DarkRoast extends Beverage {
    public function __construct()
    {
        $this->description ="Espresso";
    }

    public function cost() : float{
        return 0.99;
    }
}