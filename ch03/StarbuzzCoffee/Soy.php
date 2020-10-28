<?php

class Soy extends CondimentDecorator {

    public function __construct(Beverage $beverage)
    {
       $this->description ="Soy";
       $this->beverage = $beverage;
    }

    public function cost(): float{
        return 0.15 + $this->beverage->cost();
    }
}