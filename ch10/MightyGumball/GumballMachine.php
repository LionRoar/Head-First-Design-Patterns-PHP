<?php

class GumballMachine {
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;

    private $state;
    private $count = 0;

    public function __construct(int $numberOfGumballs) {
        $this->soldOutState = new SoldOutState();
        $this->noQuarterState = new NoQuarterState();
        $this->hasQuarterState = new HasQuarterState();
        $this->soldState = new SoldState();

        $this->count = $numberOfGumballs;
        if ($this->count > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }

    }

    public function insertQuarter() {
        $this->state->insertQuarter();
    }

    public function ejectQuarter() {
        $this->state->ejectQuarter();
    }

    public function turnCrank() {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(StateInterface $state) {
        $this->state = $state;
    }

    public function releaseBall() {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count !== 0) {
            $this->count -= 1;
        }

    }

    public function getCount() {
        return $this->count;
    }

    public function getNoQuarterState() {
        return $this->noQuarterState;
    }

    public function getHasQuarterState() {
        return $this->noQuarterState;
    }

    public function getSoldOutState() {
        return $this->soldOutState;
    }

    public function getSoldState() {
        return $this->soldState;
    }
    public function __toString() {
        $gumballMachine = "\nMighty Gumball, Inc.\n"
        . "PHP-enabled Standing Gumball Model #2018\n"
        . "Inventory: " . $this->count . " gumballs\n"
        . "Machine " . $this->state->description() . "\n";

        return $gumballMachine;
    }
}