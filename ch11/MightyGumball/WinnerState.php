<?php

class WinnerState implements StateInterface {
    private $machine;
    public function __construct(GumballMachine $machine) {
        $this->machine = $machine;

    }
    public function insertQuarter() {
        echo "Can't do that .\n";
    }

    public function ejectQuarter() {
        echo "Can't do that .\n";
    }

    public function turnCrank() {
        echo "Can't do that .\n";
    }

    public function dispense() {
        echo "YOU'RE A WINNER! You get two gumballs for a quarter\n";
        $this->machine->releaseBall();
        if ($this->machine->getCount() === 0) {
            $this->machine->setState($this->machine->getSoldOutState());
        } else {
            $this->machine->releaseBall();
            if ($this->machine->getCount() > 0) {
                $this->machine->setState($this->machine->getNoQuarterState());
            } else {
                echo "Oops, out of gumballs\n";
                $this->machine->setState($this->machine->getSoldOutState());
            }
        }
    }

    public function description(): string {
        return "got a winner.";
    }

}