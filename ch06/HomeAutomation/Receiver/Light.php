<?php

namespace Receiver;

class Light {

    public function __construct()
    {

    }

    public function on(){
        echo 'Light is ON.' . PHP_EOL;
    }
    public function off(){
        echo 'Light is OFF. ' . PHP_EOL;
    }
}