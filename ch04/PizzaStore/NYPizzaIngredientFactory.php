<?php
#region use
use Ingredients\Dough;
use Ingredients\Sauce;
use Ingredients\Cheese;
use Ingredients\Clams;
use Ingredients\Pepperoni;

use Ingredients\Veggies\Garlic;
use Ingredients\Veggies\RedPepper;
use Ingredients\Veggies\Onion;
use Ingredients\Veggies\Mushroom;

use Ingredients\Dough\ThinCrustDough;
use Ingredients\Sauce\MarinaraSauce;
use Ingredients\Cheese\ReggianCheese;
use Ingredients\Pepperoni\SlicedPepperoni;
use Ingredients\Clams\FreshClams;
#endregion

class NYPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianCheese();
    }
    public function createVeggies(): array
    {
        return [new Garlic(), new Onion() , new Mushroom() , new RedPepper()];
    }
    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }
    public function createClam(): Clams
    {
        return new FreshClams();
    }
}