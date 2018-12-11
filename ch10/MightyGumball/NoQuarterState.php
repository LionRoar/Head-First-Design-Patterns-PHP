<?php

class NoQuarterState implements StateInterface {

    private $machine;
    public function __construct(GumballMachine $machine) {
        $this->machine = $machine;
    }

    public function insertQuarter() {
        echo "You inserted a quarter.\n";
        $this->machine->setState($this->machine->getHasQuarterState());
    }

    public function ejectQuarter() {
        echo "You haven't inserted a quarter\n";

    }

    public function turnCrank() {
        echo "You turned but there's no quarter\n";
    }

    public function dispense() {
        echo "You need to pay for your balls\n";
    }

    public function description(): string {
        return "has no quarter.";
    }
}