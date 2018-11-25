<?php

class NullIterator implements IteratorInterface {
    public function next(){
        return NULL;
    }
    public function hasNext() : bool {
        return false;
    }
}