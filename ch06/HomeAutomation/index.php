<?php

require_once './vendor/autoload.php';
#region use
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
use Commands\CeilingFanHighCommand;
use Commands\CeilingFanMediumCommand;
use Commands\StereoOnWithCDCommand;
use Commands\StereoOffCommand;
#endregion

$remote = new RemoteControl();


$ceilingFan = new CeilingFan("Living Room");

$ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);

$remote->setCommand(0 , $ceilingFanMedium , $ceilingFanOff);
$remote->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);

echo $remote;

$remote->undoButtonWasPushed();
$remote->onButtonWasPushed(1);

