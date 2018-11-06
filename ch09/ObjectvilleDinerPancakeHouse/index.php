<?php

require_once './vendor/autoload.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu =  new DinerMenu();
$p = $pancakeHouseMenu->getMenuItems();
$d = $dinerMenu->getMenuItems();

foreach($p as $c)
    echo $c->getName();

echo "\n\n";

foreach($d as $s)
    echo $s->getName();




//$waitress = new Waitress($pancakeHouseMenu,$dinerMenu);
//$waitress->printMenu();