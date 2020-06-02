<?php

namespace MG\Client;

use MG\GumballMachineInterface;

class GumballMachineProxy implements GumballMachineInterface {

    private $machine;

    public function __construct(RequestInterface $remoteMachine) {
        $this->machine = $remoteMachine->get();
    }
    public function getCount(): int {
        return $this->machine['count'];
    }
    public function getLocation(): string {
        return $this->machine['location'];
    }
    public function getState(): string {
        return $this->machine['state'];
    }
    public function getRemotePath(): string {
        return $this->machine['path'];
    }
}