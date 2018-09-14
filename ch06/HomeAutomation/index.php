<?php

require_once './vendor/autoload.php';

use \Receiver\Light;
use \Receiver\GarageDoor;
use Receiver\CeilingFan;
use Receiver\Stereo;
use Commands\LightOnCommand;
use Commands\LightOffCommand;
use Commands\GarageDoorCloseCommand;
use Commands\GarageDoorOpenCommand;
use Commands\CeilingFanOffCommand;
use Commands\CeilingFanOnCommand;
use Commands\StereoOnWithCDCommand;
use Commands\StereoOffCommand;

$remote = new RemoteControl();

$livingRoomLight = new Light("Living Room");
$kitchenLight = new Light("Kitchen");
$ceilingFan = new CeilingFan("Living Room");
$garageDoor = new GarageDoor();
$stereo = new Stereo("Living Room");

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);

$ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$garageOpen = new GarageDoorOpenCommand($garageDoor);
$garageClose = new GarageDoorCloseCommand($garageDoor);

$stereoWithCDOn = new StereoOnWithCDCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);



$remote->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remote->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remote->setCommand(2, $ceilingFanOn, $ceilingFanOff);
$remote->setCommand(3, $garageOpen , $garageClose);
$remote->setCommand(4, $stereoWithCDOn, $stereoOff);

echo $remote;

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);

$remote->onButtonWasPushed(1);
$remote->offButtonWasPushed(1);

$remote->onButtonWasPushed(2);
$remote->offButtonWasPushed(2);

$remote->onButtonWasPushed(3);
$remote->offButtonWasPushed(3);

$remote->onButtonWasPushed(4);
$remote->offButtonWasPushed(4);

