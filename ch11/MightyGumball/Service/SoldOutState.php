<?php

namespace MG\Service;

class SoldOutState implements StateInterface {
    private $machine;
    public function __construct(GumballMachine $machine) {
        $this->machine = $machine;
    }

    public function insertQuarter() {
        echo "You can't insert a quarter , the machine is sold out\n";
    }

    public function ejectQuarter() {
        echo "You can't eject, You haven't inserted a quarter yet\n";
    }

    public function turnCrank() {
        echo "You turned, but there are no gumballs\n";
    }

    public function dispense() {
        echo "No gumball dispensed \n";
    }

    public function description(): string {
        return "Sold out.";
    }
}