<?php

class CompositeIterator implements IteratorInterface {

    private $stack = array();

    public function __construct(IteratorInterface $iterator){
        array_push($this->stack, $iterator);

    }

    public function next(){
        if($this->hasNext()){
            $iterator = $this->array_peek($this->stack);
            $component = $iterator->next();
            if($component instanceof Menu) {
                array_push($this->stack , $component->createIterator());
            }
            return $component;
        }
        return NULL;
    }

    public function hasNext() : bool {
        if(count($this->stack) <= 0 ) return false;
        $iterator = $this->array_peek($this->stack);
        if(!$iterator->hasNext()){
            array_pop($this->stack);
            return $this->hasNext();
        }
        return true;
    }

    private function array_peek(array $array){
        return $array[count($array) - 1];
    }
}