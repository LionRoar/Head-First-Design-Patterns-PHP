<?php

namespace Commands;

use \Command;
use Receiver\CeilingFan;

class CeilingFanOffCommand implements Command {
    private $fan;

    public function __construct(CeilingFan $fan){
        $this->fan = $fan;
    }

    public function execute(){
        $this->fan->off();
    }
}