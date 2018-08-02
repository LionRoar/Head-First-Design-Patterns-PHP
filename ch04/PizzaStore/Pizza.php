<?php

abstract class Pizza {
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function prepare(){
        echo "Preparing $this->name \n";
        echo "Tossing dough ...\nAdding sauce ...\n";
        echo "Adding Toppings: \n";
        foreach($this->toppings as $t)
            echo "$t ,";
        echo "\n";
    }

    public function bake(){
        echo "Bake for 25 minute at 350\n";
    }
    public function cut(){
        echo "Cutting the pizza into diagonal slices\n";
    }
    public function box(){
        echo "Place Pizza in official PizzaStore box\n\n";
    }
    public function getName() : string {
        return $this->name;
    }
}