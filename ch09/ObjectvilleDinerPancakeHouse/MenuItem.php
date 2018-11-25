<?php

class MenuItem extends MenuComponent {
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    private $nullIterator =  NULL;

    public function __construct(string $name,
        string $description,
        bool $vegetarian,
        float $price){

        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function getPrice() : float {
        return $this->price;
    }

    public function isVegetarian() : bool {
        return $this->vegetarian;
    }

    public function print(){
        echo " ". $this->getName();
        if($this->isVegetarian())
            echo "(v)";
        echo ", " .$this->getPrice() . PHP_EOL;
        echo "   -- " . $this->getDescription() . PHP_EOL;
    }

    public function createIterator() : IteratorInterface {
        if(is_null($this->nullIterator))
            $this->nullIterator = new NullIterator();
        return $this->nullIterator;
    }
}