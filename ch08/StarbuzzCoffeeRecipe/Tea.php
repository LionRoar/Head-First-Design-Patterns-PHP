<?php

class Tea extends CaffeineBeverage {

    protected function brew(){
        echo "Steeping the tea " . PHP_EOL;
    }

    protected function addCondiments(){
        echo "Adding Lemon " . PHP_EOL;
    }
}