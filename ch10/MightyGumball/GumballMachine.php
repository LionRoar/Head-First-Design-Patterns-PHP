<?php

class GumballMachine {
    const SOLD_OUT = 0;
    const NO_QUARTER = 1;
    const HAS_QUARTER = 2;
    const SOLD = 3;
    private static $stateName = ['is sold out', 'is waiting for quarter', 'has a quarter', 'Sold'];

    private $state = self::SOLD_OUT;
    private $count = 0;

    public function __construct(int $count) {
        $this->count = $count;
        if ($this->count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }
    public function insertQuarter() {
        switch ($this->state) {
        case self::HAS_QUARTER:
            echo "You can't insert another quarter \n";
            break;
        case self::SOLD_OUT:
            echo "You can't insert a quarter , the machine is sold out\n";
            break;
        case self::SOLD:
            echo "Please wait, We're already giving you a gumball\n";
            break;
        case self::NO_QUARTER:
            echo "You inserted a quarter.\n";
            $this->state = self::HAS_QUARTER;
            break;
        }
    }

    public function ejectQuarter() {
        switch ($this->state) {
        case self::HAS_QUARTER:
            echo "Quarter returned \n";
            $this->state = self::NO_QUARTER;
            break;
        case self::SOLD_OUT:
            echo "You can't eject, You haven't inserted a quarter yet\n";
            break;
        case self::SOLD:
            echo "Sorry, you already turned the crank\n";
            break;
        case self::NO_QUARTER:
            echo "You haven't inserted a quarter\n";
            break;
        }
    }

    public function turnCrank() {
        switch ($this->state) {
        case self::HAS_QUARTER:
            echo "You turned...\n";
            $this->state = self::SOLD;
            $this->dispense();
            break;
        case self::SOLD_OUT:
            echo "You turned, but there are no gumballs\n";
            break;
        case self::SOLD:
            echo "Turning Twice doesn't get you another gumball\n";
            break;
        case self::NO_QUARTER:
            echo "You turned but there's no quarter\n";
            break;
        }
    }

    public function dispense() {
        switch ($this->state) {
        case self::HAS_QUARTER:
            echo "No gumball dispensed \n";
            break;
        case self::SOLD_OUT:
            echo "No gumball dispensed \n";
            break;
        case self::SOLD:
            {
                echo "A gumball comes rolling out the slot\n";
                if (--$this->count === 0) {
                    echo "Oops, out of gumballs\n";
                    $this->state = self::SOLD_OUT;
                } else {
                    $this->state = self::NO_QUARTER;
                }
                break;
            }
        case self::NO_QUARTER:
            echo "You need to pay for your balls\n";
            break;
        }
    }

    public function __toString() {
        $gumballMachine = "\nMighty Gumball, Inc.\n"
            . "PHP-enabled Standing Gumball Model #2018\n"
            . "Inventory: " . $this->count . " gumballs\n"
            . "Machine " . self::$stateName[$this->state] . "\n";

        return $gumballMachine;
    }
}