<?php

require_once './vendor/autoload.php';
#region use
use Components\Amplifier;
use Components\Tuner;
use Components\DvdPlayer;
use Components\CdPlayer;
use Components\Projector;
use Components\TheaterLights;
use Components\Screen;
use Components\PopcornPopper;
#endregion

$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer;
$projector = new Projector();
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();

$homeTheater = new HomeTheaterFacade(
    $amp , $tuner , $dvd , $cd ,
    $projector , $screen , $lights ,$popper
);

$homeTheater->watchMovie("Dude Where's My Car");
echo PHP_EOL;
$homeTheater->endMovie();
