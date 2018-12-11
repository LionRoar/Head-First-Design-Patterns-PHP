<?php

class SoldState implements StateInterface {

    private $machine;
    public function __construct(GumballMachine $machine) {
        $this->machine = $machine;
    }
    public function insertQuarter() {
        echo "Please wait, We're already giving you a gumball\n";
    }

    public function ejectQuarter() {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnCrank() {
        echo "Turning Twice doesn't get you another gumball\n";
    }

    public function dispense() {
        $this->machine->releaseBall();
        if ($this->machine->getCount() <= 0) {
            echo "Oops, out of gumballs\n";
            $this->machine->setState($this->machine->getSoldOutState());
        } else {
            $this->machine->setState($this->machine->getNoQuarterState());
        }

    }
    public function description(): string {
        return "Gumball sold.";
    }
}