<?php

class DinerMenuIterator implements IteratorInterface {
    private $menuItems;

    public function __construct(SplFixedArray $fa){
        $this->menuItems = $fa;
    }

    public function next(){
        $item = $this->menuItems->current();
        $this->menuItems->next();
        return $item;

    }

    public function hasNext() : bool {
        if($this->menuItems->key() >= $this->menuItems->getSize())
            return false;
        return true;
    }
}