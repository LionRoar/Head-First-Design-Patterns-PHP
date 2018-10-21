<?php

/**
 * you’re short on Duck objects and you’d like to use some
 * Turkey objects in their place
 */
class TurkeyAdapter implements Duck {
    private $turkey;

    public function __construct(Turkey $turkey){
        $this->turkey = $turkey;
    }
    public function quack(){
        $this->turkey->gobble();
    }
    public function fly(){
        /**
         * Turkeys fly in short spurts - they
         * can’t do long-distance flying like ducks. To
         * map between a Duck’s fly() method and a
         * Turkey’s, we need to call the Turkey’s fly()
         * method five times to make up for it.
         */
        for($i = 0 ; $i < 5 ; $i++){
            $this->turkey->fly();
        }
    }
}