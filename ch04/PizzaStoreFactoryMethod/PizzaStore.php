<?php

abstract class PizzaStore { // <- abstract 

    private $pizza;
    public function orderPizza(string $type) : Pizza {
        $this->pizza = $this->createPizza($type);

        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();

        return $this->pizza;
    }

    protected abstract function createPizza(string $type) : Pizza ;
}