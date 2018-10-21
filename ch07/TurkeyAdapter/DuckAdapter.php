<?php

//Sharp-your-pencil challenge

class DuckAdapter implements Turkey {
    private $duck;//Adaptee

    public function __construct(Duck $duck){
        $this->duck = $duck;
    }
    public function gobble(){
        $this->duck->quack();
    }
    public function fly(){
        $this->duck->fly();
    }
}