<?php

namespace Commands;

use \Command;
use Receiver\Light;

class LightOffCommand implements Command {
    private $light;

    public function __construct(Light $light){
        $this->light = $light;
    }

    public function execute(){
        $this->light->off();
    }
}