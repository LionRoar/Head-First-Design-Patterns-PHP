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
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine . PHP_EOL;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->ejectQuarter();

echo $gumballMachine . PHP_EOL;

$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine . PHP_EOL;