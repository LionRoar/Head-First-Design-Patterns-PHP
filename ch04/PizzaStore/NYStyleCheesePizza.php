<?php

class NYStyleCheesePizza extends Pizza {
    public function __construct()
    {
     $this->name  = "NY Style Sauce and Cheese Pizza ";
     $this->dough = "Thin Crust Dough";
     $this->sauce = "Marinara Sauce";

     array_push($this->toppings,"Grated Reggiano Cheese");
    }
}