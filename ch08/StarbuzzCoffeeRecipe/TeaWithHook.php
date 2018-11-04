<?php

class TeaWithHook extends CaffeineBeverageWithHook {

    protected function brew(){
        echo "Steeping the tea " . PHP_EOL;
    }

    protected function addCondiments(){
        echo "Adding Lemon " . PHP_EOL;
    }

    protected function customerWantsCondiments() : bool {
        $answer = $this->getUserInput();
        if(strtolower($answer)[0] ==  'y')
            return true;
        return false;
    }

    private function getUserInput(): string {
        $answer = null;
        $answer = readline("Would you like lemon with your tea (y/n) ? \n");
        if($answer == null)
            return "no";
        return $answer;
    }
}