<?php

class TestSingleton {
    public function testFillChocolateBoiler(){
        echo "Filling the boiler from TestSingleton class.\n" . PHP_EOL;
        $boiler = ChocolateBoiler::getInstance();
        $boiler->fill();
    }
}