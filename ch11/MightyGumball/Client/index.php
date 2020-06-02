<?php

namespace MG\Client;

require_once '../vendor/autoload.php';

$location = [
    "http://localhost:3001",
    "http://localhost:3002",
    "http://localhost:3003",
];

$monitor = [];

for ($i = 0; $i < count($location); $i++) {
    try {
        $machine = new GumballMachineProxy(new JsonRequest($location[$i]));
        $monitor[$i] = new GumballMonitor($machine);
    } catch (\Exception $e) {
        echo $e->message . PHP_EOL;
    }
}

for ($i = 0; $i < count($location); $i++) {
    $monitor[$i]->report();
}

// $machine01 = new GumballMachineProxy(new Http("http://localhost:3001"));
// $machine02 = new GumballMachineProxy(new Http("http://localhost:3002"));
// $machine03 = new GumballMachineProxy(new Http("http://localhost:3003"));

// $gumballMonitor01 = new GumballMonitor($machine01);
// $gumballMonitor02 = new GumballMonitor($machine02);
// $gumballMonitor03 = new GumballMonitor($machine03);

// $gumballMonitor01->report();
// $gumballMonitor02->report();
// $gumballMonitor03->report();