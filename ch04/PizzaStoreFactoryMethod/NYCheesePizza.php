<?php

class NYCheesePizza extends Pizza {
    public function __construct(){
        $this->name ="New york Style sauce and cheese pizza";
        $this->dough = "Thin crust dough";
        $this->sauce = "Marinara sauce";

        $this->toppings = ['Grated Reggiano Cheese'];
    }
}