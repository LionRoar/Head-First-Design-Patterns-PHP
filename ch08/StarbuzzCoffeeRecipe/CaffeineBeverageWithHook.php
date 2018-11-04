<?php

abstract class CaffeineBeverageWithHook {

    final public function prepareRecipe(){
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if($this->customerWantsCondiments())
            $this->addCondiments();
    }


    abstract protected function brew();

    abstract protected function addCondiments();

    protected function customerWantsCondiments() : bool {
        return true;
    }
    private function boilWater(){
        echo "Boiling water " . PHP_EOL;
    }

    private function pourInCup(){
        echo "Pouring in cup " . PHP_EOL;
    }
}