<?php

require_once './vendor/autoload.php';

if (count($argv) < 3) {
    echo "GumballMachine <name> <inventory>\n";
    exit(1);
}
$count = intval($argv[2]);

$gumballMachine = new GumballMachine($argv[1], $count);

$gumballMonitor = new GumballMonitor($gumballMachine);

$gumballMonitor->report();