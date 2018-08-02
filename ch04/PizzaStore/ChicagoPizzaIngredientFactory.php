<?php
#region use
use Ingredients\Dough;
use Ingredients\Sauce;
use Ingredients\Cheese;
use Ingredients\Clams;
use Ingredients\Pepperoni;

use Ingredients\Dough\ThickCrustDough;
use Ingredients\Sauce\PulmTomatoSauce;
use Ingredients\Cheese\MozzarellaCheese;
use Ingredients\Pepperoni\SlicedPepperoni;
use Ingredients\Clams\FrozenClams;

use Ingredients\Veggies\BlackOlives;
use Ingredients\Veggies\Spinach;
use Ingredients\Veggies\EggPlant;
#endregion
class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory {

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PulmTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }
    public function createVeggies(): array
    {
        return [new BlackOlives(), new Spinach() , new EggPlant()];
    }
    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }
    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}