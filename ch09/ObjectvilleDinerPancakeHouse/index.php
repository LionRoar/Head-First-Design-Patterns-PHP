<?php

require_once './vendor/autoload.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu =  new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress([$pancakeHouseMenu,$dinerMenu,$cafeMenu]);
$waitress->printMenu();


