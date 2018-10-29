<?php

namespace Components;

class DvdPlayer
{
    private $movie;
    public function on(){
        echo "DVD player on " . PHP_EOL;
    }

    public function play(string $movie){
        $this->movie = $movie;
        echo "DVD Player playing '$movie' " . PHP_EOL;
    }

    public function stop(){
        echo "DVD Player stopped '". $this->movie . "'". PHP_EOL;
    }

    public function eject(){
        echo "DVD Player eject " . PHP_EOL;
    }

    public function off(){
        echo "DVD Player off " . PHP_EOL;
    }
}

