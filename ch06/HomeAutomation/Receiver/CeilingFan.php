<?php

namespace Receiver;
class CeilingFan {

    private $name = '' ;

    public static  $HIGH = 3;
    public static $MEDIUM = 2;
    public static $LOW = 1;
    public static $OFF = 0;
    private $speedArr = ['Off','Low','Medium','High'];

    private $speed ;

    public function __construct(string $name)
    {
        if(isset($name))
            $this->name = $name;
        $this->speed = self::$OFF;
    }

    public function high(){
        $this->speed =self::$HIGH;
        echo $this->name . " CeilingFan is On speed is set to " .
         $this->speedArr[$this->getSpeed()]
         . PHP_EOL;
    }

    public function medium(){
        $this->speed = self::$MEDIUM;
        echo $this->name . " CeilingFan is On speed is set to " .
         $this->speedArr[$this->getSpeed()] . PHP_EOL;
    }

    public function low(){
        $this->speed =self::$LOW;
        echo $this->name . " CeilingFan is On speed is set to " .
         $this->speedArr[$this->getSpeed()] . PHP_EOL;
    }

    public function off(){
        echo $this->name . ' CeilingFan is OFF. ' . PHP_EOL;
        $this->speed = self::$OFF;
    }

    public function getSpeed() {
       return $this->speed;
    }

    public function on(){
        $this->low();
    }
}