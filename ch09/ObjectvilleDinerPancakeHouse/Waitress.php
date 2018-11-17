<?php

class Waitress {
    private $menus;

    public function __construct(array $menus){
        $this->menus = $menus;
    }

    public function printMenu(){
        echo "MENU" . PHP_EOL . "----";
        foreach ($this->menus as $menu) {
            echo PHP_EOL . $menu->getName() . PHP_EOL;
            $iterator = $menu->createIterator();
            $this->printIteratorMenu($iterator);
        }
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