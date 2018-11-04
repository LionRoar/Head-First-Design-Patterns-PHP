<?php

abstract class CaffeineBeverage {

    /**
     * Template method
     * declared as final to prevent subclasses from changing the algorithm
     *
     * @return void
     */
    final public function prepareRecipe(){//Template method
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }


    abstract protected function brew();

    abstract protected function addCondiments();

    private function boilWater(){
        echo "Boiling water " . PHP_EOL;
    }

    private function pourInCup(){
        echo "Pouring in cup " . PHP_EOL;
    }
}