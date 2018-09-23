<?php

namespace Commands;

use Receiver\CeilingFan;
use \Command;

class CeilingFanOffCommand implements Command {
    private $fan;
    private $prevSpeed;

    public function __construct(CeilingFan $fan) {
        $this->fan = $fan;
    }

    public function execute() {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->off();
    }

    public function undo() {
        switch ($this->prevSpeed) {
        case $this->fan::$HIGH:
            $this->fan->high();
            break;
        case $this->fan::$MEDIUM:
            $this->fan->medium();
            break;
        case $this->fan::$LOW:
            $this->fan->low();
            break;
        case $this->fan::$OFF:
            $this->fan->off();
            break;
        }
    }
}