<?php

class NYPizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'cheese':
                return new NYStyleCheesePizza();
                break;
            default:
                throw new Exception("We dont have $type Pizza");
                break;
        }
    }

}