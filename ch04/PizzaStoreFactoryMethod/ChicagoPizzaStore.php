<?php

class ChicagoPizzaStore extends PizzaStore {
    protected function createPizza(string $type) : Pizza {
       switch ($type) {
           case 'cheese':
            return new ChicagoCheesePizza();
               break;
        //    case 'veggie':
        //     return new ChicagoVeggiePizza();
        //      break;
        //    case 'pepperoni':
        //     return new ChicagoPepperoniPizza();
            break;
           default:
               return null;
               break;
       }
    }
}