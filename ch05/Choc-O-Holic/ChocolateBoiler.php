<?php

/**
 * Singleton class
 */
class ChocolateBoiler {
    private static $instance;
    private $empty;
    private $boiled;

    /**
     * Private constructor
     */
    private function __construct(){
        $this->empty  = true;
        $this->boiled = false;
    }

    public static function getInstance() : ChocolateBoiler {
        if( self::$instance == null ){
            self::$instance = new ChocolateBoiler();
        }
        return self::$instance;
    }

    public function isEmpty() : bool{
        return $this->empty;
    }

    public function isBoiled() : bool{
        return $this->boiled;
    }

    public function fill(){
        if($this->isEmpty()){
            $this->empty  = false;
            $this->boiled = false;
            // fill the boiler with a milk/chocolate mixture
        }
    }

    public function drain(){
        if(!$this->isEmpty() && $this->isBoiled()){
            // drain the boiled milk and chocolate
            $this->empty = true;
        }
    }

    public function boil(){
        if(!$this->isEmpty() && !$this->isBoiled()){
            // bring the contents to a boil
            $this->boiled = true;
        }
    }


}