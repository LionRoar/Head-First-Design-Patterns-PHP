<?php


class ChicagoStyleCheesePizza extends Pizza {
    public function __construct()
    {
        $this->name  = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        array_push($this->toppings,"Shredded Mozzarella Cheese");
    }

    public function cut(){
        echo "Cutting the pizza into square slices\n";
    }
}