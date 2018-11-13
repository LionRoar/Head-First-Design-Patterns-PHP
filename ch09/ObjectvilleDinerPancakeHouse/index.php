<?php

require_once './vendor/autoload.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu =  new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu,$dinerMenu);
$waitress->printMenu();