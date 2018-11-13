<?php

class Waitress {
    private $pancakeHouse;
    private $diner;

    public function __construct(Menu $pancake, Menu $diner){
        $this->pancakeHouse =$pancake;
        $this->diner = $diner;
    }

    public function printMenu(){
        $pancakeIterator = $this->pancakeHouse->createIterator();
        $dinerIterator = $this->diner->createIterator();
        echo "MENU\n----\n\nBREAKFAST\n";
        $this->printIteratorMenu($pancakeIterator);
        echo "\nLUNCH\n";
        $this->printIteratorMenu($dinerIterator);
    }

    private function printIteratorMenu(IteratorInterface $iterator){
        while($iterator->hasNext()){
            $item = $iterator->next();
            echo $item->getName() . ", ";
            echo $item->getPrice() . " -- ";
            echo $item->getDescription() . PHP_EOL;
        }
    }
}