<?php

abstract class Pizza {
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();


    public function prepare() {
        echo "Preparing " . $this->name . PHP_EOL .
         "Tossing dough..." . PHP_EOL .
         "Adding sauce..." . PHP_EOL .
         "Adding toppings:";
         foreach($this->toppings as $k => $t){
            echo " " . $t;
         }
         echo PHP_EOL;
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
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name ;
    }
}