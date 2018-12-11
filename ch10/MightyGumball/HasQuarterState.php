<?php

class HasQuarterState implements StateInterface {
    private $machine;
    public function __construct(GumballMachine $machine) {
        $this->machine = $machine;
    }

    public function insertQuarter() {
        echo "You can't insert another quarter \n";
    }

    public function ejectQuarter() {
        echo "Quarter returned \n";
        $this->machine->setState($this->machine->getNoQuarterState());
    }

    public function turnCrank() {
        echo "You turned...\n";
        $this->machine->setState($this->machine->getSoldState());
    }

    public function dispense() {
        echo "No gumball dispensed \n";
    }

    public function description(): string {
        return "has a quarter. ";
    }
}