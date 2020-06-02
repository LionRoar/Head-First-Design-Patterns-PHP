<?php

class ModelDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quacks();
    }

    public function swim() {

    }
    public function display() {
        echo "I'm a model duck. " . PHP_EOL;
    }
}