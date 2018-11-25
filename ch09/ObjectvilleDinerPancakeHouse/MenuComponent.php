<?php

abstract class MenuComponent {
    // hierarchy operations
    public function add(MenuComponent $menuComponent){
        throw new UnsupportedException();
    }
    public function remove(MenuComponent $menuComponent){
        throw new UnsupportedException();
    }
    public function getChild(int $i) : MenuComponent {
        throw new UnsupportedException();
    }
    // operations related to menus / menu items
    public function getName() : string {
        throw new UnsupportedException();
    }
    public function getDescription() : string {
        throw new UnsupportedException();
    }
    public function getPrice() : float {
        throw new UnsupportedException();
    }
    public function isVegetarian() : bool {
        throw new UnsupportedException();
    }
    public function print(){
        throw new UnsupportedException();
    }
    abstract public function createIterator() : IteratorInterface ;
}