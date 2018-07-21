<?php

class MallardDuck extends Duck {

    public function __construct() {
        $this->quackBehavior = new Quacks();
        $this->flyBehavior = new FlyWithWings();
    }

    public function swim() {

    }
    public function display() {
        echo "I'm mallard duck!";
    }
}