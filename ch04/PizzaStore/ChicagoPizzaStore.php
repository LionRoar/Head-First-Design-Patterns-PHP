<?php

class ChicagoPizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $pizzaIngredientFactory = new ChicagoPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza =  new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("Chicago Style Deep Dish Cheese Pizza");
                break;
            default:
                throw new Exception("We dont have $type Pizza");
                break;
        }

        return $pizza;
    }
}