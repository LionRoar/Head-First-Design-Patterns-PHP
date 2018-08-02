<?php

class CheesePizza extends Pizza {
    //ingredient Factory
    private $iFac;

    public function __construct(PizzaIngredientFactory $pif){
        $this->iFac = $pif;
    }

    public function prepare() : Pizza
    {
        echo "Preparing $this->name\n";
        $this->dough = $this->iFac->createDough();
        $this->sauce = $this->iFac->createSauce();
        $this->cheese =$this->iFac->createCheese();
    }
}