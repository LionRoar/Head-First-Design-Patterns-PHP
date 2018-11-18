<?php

class Waitress {
    private $menus;

    public function __construct(MenuComponent $allMenus){
        $this->menus = $allMenus;
    }

    public function printMenu(){
        $this->menus->print();
    }

}