<?php

namespace MG\Service;

require_once '../vendor/autoload.php';

use MG\Service\GumballMachine;
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$machine = new GumballMachine('santafe', 30);

$gumballMachineJson = json_encode([
    'count' => $machine->getCount(),
    'state' => $machine->getState(),
    'location' => $machine->getLocation(),
]);

echo $gumballMachineJson;
