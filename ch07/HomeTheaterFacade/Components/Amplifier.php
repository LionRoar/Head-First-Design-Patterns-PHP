<?php

namespace Components;

class Amplifier
{
    public function on(){
        echo "Amplifier on " . PHP_EOL;
    }

    public function setDvd(DvdPlayer $dvd){
        echo "Amplifier is set to dvd ". PHP_EOL;
    }

    public function setSurroundSound(){
        echo "Amplifier surround sound on (5 speakers , 1 subwoofer)  " . PHP_EOL;
    }

    public function setVolume(int $volume){
        echo "Amplifier volume is set to $volume " . PHP_EOL ;
    }

    public function off(){
        echo "Amplifier turned off " . PHP_EOL;
    }


}
