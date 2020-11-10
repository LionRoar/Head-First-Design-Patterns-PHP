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
use Commands\MacroCommand;
use Commands\StereoOnWithCDCommand;
use Commands\StereoOffCommand;
use Commands\PartyModeCommand;
use Commands\PartyModeOffCommand;
#endregion

//* index.php [the client] also acts as The RemoteLoader

//* The RemoteControl [the invoker] (holds commands to execute a request by calling execute() )
$remote = new RemoteControl();

//* The Receivers (have no knowledge of what to do to carry out request)
$ceilingFan = new CeilingFan("Living Room");
$light = new Light("Living room");
$stereo = new Stereo("Living room");

//* The Requests encapsulated with objects [commands] (sets a Receiver for a Command)
$partyOn = [
    new CeilingFanOnCommand($ceilingFan),
    new LightOnCommand($light),
    new StereoOnWithCDCommand($stereo)
];

$partyOf = [
    new CeilingFanOffCommand($ceilingFan),
    new LightOffCommand($light),
    new StereoOffCommand($stereo)
];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOf);

$remote->setCommand(0 , $partyOnMacro , $partyOffMacro);

$remote->onButtonWasPushed(0);

echo $remote;

$remote->undoButtonWasPushed();
 
/**
 * Undo Ceiling fan test
 */
// $ceilingFanBedroom = new CeilingFan("Bedroom");
// $cfHighCommand = new CeilingFanHighCommand($ceilingFanBedroom);
// $cfMidCommand = new CeilingFanMediumCommand($ceilingFanBedroom);
// $cfOffCommand = new CeilingFanOffCommand($ceilingFanBedroom);

// $remote->setCommand(1, $cfHighCommand, $cfOffCommand);
// $remote->setCommand(2, $cfMidCommand, $cfOffCommand);

// $remote->onButtonWasPushed(1);
// $remote->onButtonWasPushed(2);

// $remote->undoButtonWasPushed();

// echo $remote;
