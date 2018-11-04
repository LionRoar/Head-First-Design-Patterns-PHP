<?php

class CoffeeWithHook extends CaffeineBeverageWithHook {

    protected function brew(){
        echo "Dripping coffee through filter " . PHP_EOL;
    }

    protected function addCondiments(){
        echo "Adding sugar and milk " . PHP_EOL;
    }

    protected function customerWantsCondiments() : bool {
        $answer = $this->getUserInput();
        if(strtolower($answer)[0] ==  'y')
            return true;
        return false;
    }

    private function getUserInput() : string {
        $answer = null;
        $answer = readline("Would you like milk and sugar with your coffee (y/n) ? \n");
        if($answer == null)
            return "no";
        return $answer;
    }
}