<?php

abstract class PizzaStore {

    public function orderPizza(string $type) : Pizza{
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
    /**
     * abstract factory method
     *
     * @param string $type
     * @return Pizza
     */
    abstract protected function createPizza(string $type): Pizza;
}