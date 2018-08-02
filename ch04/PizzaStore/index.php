<?php

require_once './vendor/autoload.php';

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nyStore->orderPizza("cheese");

$chicagoStore->orderPizza("cheese");

