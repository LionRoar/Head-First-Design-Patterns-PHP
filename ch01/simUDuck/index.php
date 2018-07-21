<?php

require_once './vendor/autoload.php';

$duck = new ModelDuck();

$duck->display();
echo "\n";
$duck->preformFly();
echo "\n";
$duck->preformQuack();
$duck->setFlyBehavior(new FlyRocketPowered());
echo "\n";
$duck->preformFly();
echo "\n";
