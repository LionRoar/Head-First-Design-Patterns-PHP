<?php

namespace Receiver;

class CeilingFan {

    private $name = '' ;
    public function __construct(string $name)
    {
        if(isset($name))
            $this->name = $name;
    }

    public function on(){
        echo $this->name . ' CeilingFan is ON.' . PHP_EOL;
    }
    public function off(){
        echo $this->name . ' CeilingFan is OFF. ' . PHP_EOL;
    }
}