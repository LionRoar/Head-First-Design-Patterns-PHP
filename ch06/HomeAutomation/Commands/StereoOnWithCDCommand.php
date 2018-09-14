<?php

namespace Commands;

use \Command;
use Receiver\Stereo;

class StereoOnWithCDCommand implements Command  {
    private $stereo;

    public function __construct(Stereo $stereo){
        $this->stereo = $stereo;
    }

    public function execute(){
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}