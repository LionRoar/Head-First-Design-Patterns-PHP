<?php

class Waitress {
    private $menus;

    public function __construct(MenuComponent $allMenus){
        $this->menus = $allMenus;
    }

    public function printMenu(){
        $this->menus->print();
    }

    public function printVegetarianMenu(){
        $iterator = $this->menus->createIterator();
        echo "\nVEGETARIAN MENU\n---------------\n";
        while($iterator->hasNext()){
            $menuComponent = $iterator->next();
            try {
                if($menuComponent->isVegetarian())
                    $menuComponent->print();
            } catch (UnsupportedException $e) {
                //var_dump($menuComponent->getName());
            }
        }
    }

}