<?php

class Coffee extends CaffeineBeverage {

    protected function brew(){
        echo "Dripping coffee through filter " . PHP_EOL;
    }

    protected function addCondiments(){
        echo "Adding sugar and milk " . PHP_EOL;
    }
}