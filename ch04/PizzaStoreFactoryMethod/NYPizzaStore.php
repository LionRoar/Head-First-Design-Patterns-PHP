<?php

class NYPizzaStore extends PizzaStore {
    protected function createPizza(string $type) : Pizza {
       switch ($type) {
           case 'cheese':
            return new NYCheesePizza();
               break;
        //    case 'veggie':
        //     return new NYVeggiePizza();
        //      break;
        //    case 'pepperoni':
        //     return new NYPepperoniPizza();
            break;
           default:
               return null;
               break;
       }
    }
}