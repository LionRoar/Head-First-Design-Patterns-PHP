<?php


namespace Commands;

use \Command;
use Receiver\CeilingFan;

class CeilingFanHighCommand implements Command {

    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $cf){
        $this->ceilingFan = $cf;
    }

    public function execute(){

        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
    }

    public function undo(){
        $this->ceilingFan->setSpeed($this->prevSpeed);
    }

}