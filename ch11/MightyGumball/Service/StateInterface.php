<?php

namespace MG\Service;

interface StateInterface {
    public function description(): string;
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
}