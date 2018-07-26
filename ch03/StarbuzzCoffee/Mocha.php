<?php

class Mocha extends CondimentDecorator {

    public function __construct(Beverage $beverage)
    {
       $this->description ="Mocha";
       $this->beverage = $beverage;
    }

    public function cost(){
        return 0.20 + $this->beverage->cost();
    }
}