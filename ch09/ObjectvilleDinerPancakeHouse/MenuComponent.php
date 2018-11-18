<?php

abstract class MenuComponent {
    // hierarchy operations
    public function add(MenuComponent $menuComponent){
        throw new Exception("Unsupported Operation");
    }
    public function remove(MenuComponent $menuComponent){
        throw new Exception("Unsupported Operation");
    }
    public function getChild(int $i) : MenuComponent {
        throw new Exception("Unsupported Operation");
    }
    // operations related to menus / menu items
    public function getName() : string {
        throw new Exception("Unsupported Operation");
    }
    public function getDescription() : string {
        throw new Exception("Unsupported Operation");
    }
    public function getPrice() : float {
        throw new Exception("Unsupported Operation");
    }
    public function isVegetarian() : bool {
        throw new Exception("Unsupported Operation");
    }
    public function print(){
        throw new Exception("Unsupported Operation");
    }
}