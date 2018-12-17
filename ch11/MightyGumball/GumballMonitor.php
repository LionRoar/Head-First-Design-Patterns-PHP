<?php

class GumballMonitor {

    private $machine;

    public function __construct(GumballMachine $machine) {
        $this->machine = $machine;

    }

    public function report() {
        echo "Gumball Machine: " . $this->machine->getLocation() . PHP_EOL
        . "Current inventory: " . $this->machine->getCount() . PHP_EOL
        . "Current State: " . $this->machine->getState();
    }
}