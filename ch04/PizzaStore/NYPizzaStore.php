<?php

class NYPizzaStore extends PizzaStore {

    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $pizzaIngredientFactory = new NYPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza =  new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("New York Style Cheese Pizza");
                break;
            default:
                throw new Exception("We dont have $type Pizza");
                break;
        }

        return $pizza;
    }

}