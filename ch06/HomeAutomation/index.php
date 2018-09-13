<?php

require_once './vendor/autoload.php';

use \Receiver\Light;
use \Receiver\GarageDoor;

$remote = new SimpleRemoteControl();

$light = new Light();
$lightOn = new Commands\LightOnCommand($light);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();

$garageDoor = new GarageDoor();
$garageOpen = new Commands\GarageDoorOpenCommand($garageDoor);

$remote->setCommand($garageOpen);
$remote->buttonWasPressed();

