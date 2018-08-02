<?php

use Ingredients\Dough;
use Ingredients\Cheese;
use Ingredients\Clams;
use Ingredients\Pepperoni;
use Ingredients\Sauce;
//abstract factory
interface PizzaIngredientFactory {

    //set of related products
    public function createDough() : Dough;
    public function createSauce() : Sauce;
    public function createCheese(): Cheese;
    public function createVeggies() : array;
    public function createPepperoni() : Pepperoni;
    public function createClam() : Clams;

}