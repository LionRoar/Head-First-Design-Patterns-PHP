<?php

/**
 * @abstract
 * We got this code that Starbuzz already had.
 * an abstract Beverage class.
 */
abstract class Beverage {
    protected $description = "Unknown Beverage";

    public function getDescription() : string {
        return $this->description;
    }

    abstract public function cost();
}