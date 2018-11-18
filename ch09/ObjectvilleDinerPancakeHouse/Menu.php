<?php

class Menu extends MenuComponent  {
    private $menuComponents = array();
    private $name;
    private $description;
    public function __construct(string $name , string $description){
        $this->name = $name;
        $this->description = $description;
    }
    public function add(MenuComponent $menuComponent){
        array_push($this->menuComponents , $menuComponent);
    }
    public function remove(MenuComponent $menuComponent){
        $this->menuComponents = array_diff($this->menuComponents , array($menuComponent));
    }
    public function getChild(int $i) : MenuComponent {
        return $this->menuComponents[$i];
    }
    public function getName() : string {
        return $this->name;
    }
    public function getDescription() : string {
        return $this->description;
    }
    public function print(){
        echo PHP_EOL . $this->getName();
        echo ", " . $this->getDescription() . PHP_EOL;
        echo "-----------------------------". PHP_EOL;

        $iterator = new MenuComponentsIterator($this->menuComponents);
        while($iterator->hasNext()){
            $menuComponent =  $iterator->next();
            $menuComponent->print();
        }
    }
}