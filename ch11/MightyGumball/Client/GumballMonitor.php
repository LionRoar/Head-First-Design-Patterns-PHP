<?php

namespace MG\Client;

use MG\GumballMachineInterface;

class GumballMonitor {

    private $machine;

    public function __construct(GumballMachineInterface $machine) {
        $this->machine = $machine;

    }

    public function report() {
        echo "Address : " . $this->machine->getRemotePath() . PHP_EOL;
        echo "Gumball Machine: " . $this->machine->getLocation() . PHP_EOL
        . "Current inventory: " . $this->machine->getCount() . PHP_EOL
        . "Current State: " . $this->machine->getState() . PHP_EOL;
    }
}