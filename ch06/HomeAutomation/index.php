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
use Commands\PartyModeCommand;
use Commands\PartyModeOffCommand;
#endregion

//client
$remote = new RemoteControl();

//objects
$ceilingFan = new CeilingFan("Living Room");
$light = new Light("Living room");
$stereo = new Stereo("Living room");

//requests as objects
$party = [
    new CeilingFanOnCommand($ceilingFan),
    new LightOnCommand($light),
    new StereoOnWithCDCommand($stereo)
];

$macroCommand = new PartyModeCommand($party);

$remote->setCommand(0 , $macroCommand , new PartyModeOffCommand($party));

$remote->onButtonWasPushed(0);

echo $remote;

$remote->undoButtonWasPushed();
