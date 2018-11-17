<?php

class CafeMenuIterator implements IteratorInterface {
    private $menuItems;
    public function __construct(array $hashTable){
        $this->menuItems = $hashTable;
    }

    public function next(){
        $item = current($this->menuItems);
        next($this->menuItems);
        return $item;
    }

    public function hasNext(): bool {
        return current($this->menuItems)? true : false;
    }
}