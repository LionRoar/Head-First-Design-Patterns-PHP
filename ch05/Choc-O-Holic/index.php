<?php

require_once './vendor/autoload.php';

//get singleton instance
$boiler = ChocolateBoiler::getInstance();

//Is the boiler empty
echo "Is the boiler empty ? => " ;
 var_dump($boiler->isEmpty()) ;
echo PHP_EOL;

//fill from other class
(new TestSingleton())->testFillChocolateBoiler();

//check if the single boiler is filled
echo "Is the boiler empty ? => " ;
 var_dump($boiler->isEmpty()) ;
echo PHP_EOL;
