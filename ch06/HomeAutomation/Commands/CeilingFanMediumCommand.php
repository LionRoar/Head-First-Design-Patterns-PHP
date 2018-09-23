<?php


namespace Commands;

use \Command;
use Receiver\CeilingFan;

class CeilingFanMediumCommand implements Command {

    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $cf){
        $this->ceilingFan = $cf;
    }

    public function execute(){

        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->medium();
    }

    public function undo(){
        switch ($this->prevSpeed) {
            case $this->ceilingFan::$HIGH:
                $this->ceilingFan->high();
                break;
            case $this->ceilingFan::$MEDIUM:
                $this->ceilingFan->medium();
                break;
            case $this->ceilingFan::$LOW:
                $this->ceilingFan->low();
                break;
            case $this->ceilingFan::$OFF:
                $this->ceilingFan->off();
                break;
        }
    }

}