<?php

require_once './vendor/autoload.php';

$gumballMachine = new GumballMachine(5);

echo $gumballMachine . PHP_EOL;

//A quarter in
$gumballMachine->insertQuarter();
//get the gumball
$gumballMachine->turnCrank();

echo $gumballMachine . PHP_EOL;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->refill(10);
echo $gumballMachine . PHP_EOL;
