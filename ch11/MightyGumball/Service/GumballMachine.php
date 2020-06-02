<?php

namespace MG\Service;

class GumballMachine implements \MG\GumballMachineInterface {

    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;

    private $location;

    private $winnerState;

    private $state;
    private $count = 0;

    public function __construct(string $location, int $numberOfGumballs) {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);

        $this->winnerState = new WinnerState($this);

        $this->location = $location;

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

    public function getCount(): int {
        return $this->count;
    }

    public function getNoQuarterState() {
        return $this->noQuarterState;
    }

    public function getHasQuarterState() {
        return $this->hasQuarterState;
    }

    public function getSoldOutState() {
        return $this->soldOutState;
    }

    public function getSoldState() {
        return $this->soldState;
    }

    public function getWinnerState() {
        return $this->winnerState;
    }

    public function getState(): string {
        return $this->state->description() . "\n";
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function refill(int $numberOfGumballs) {
        $this->count += $numberOfGumballs;
        $this->setState($this->getNoQuarterState());
    }
    public function __toString() {
        $gumballMachine = "\nMighty Gumball, Inc.\n"
        . "PHP-enabled Standing Gumball Model #2018\n"
        . "Inventory: " . $this->getCount() . " gumballs\n"
        . $this->getState();
        return $gumballMachine;
    }

}