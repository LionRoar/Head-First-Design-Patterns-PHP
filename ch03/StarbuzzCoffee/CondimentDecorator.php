<?php

abstract class CondimentDecorator extends Beverage {

    protected $beverage;

    public function getDescription() : string {
        return $this->beverage->getDescription() .
                 ", " .$this->description;
    }

}