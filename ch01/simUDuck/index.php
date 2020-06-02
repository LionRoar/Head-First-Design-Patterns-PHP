<?php

require_once './vendor/autoload.php';

$mallard = new MallardDuck();
$mallard->display();
$mallard->preformQuack();
$mallard->preformFly();

$duck = new ModelDuck();
$duck->display();
$duck->preformFly();
$duck->preformQuack();
$duck->setFlyBehavior(new FlyRocketPowered());
$duck->preformFly();
