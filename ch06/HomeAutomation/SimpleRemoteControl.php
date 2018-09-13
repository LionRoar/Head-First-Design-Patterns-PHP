<?php

class SimpleRemoteControl {
    private $slot;

    public function setCommand(Command $command){
        $this->slot = $command;
    }

    public function buttonWasPressed(){
        $this->slot->execute();
    }
}