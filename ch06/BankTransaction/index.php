<?php

require_once './vendor/autoload.php';

$executioner = new TransactionExecutioner();

$executioner->setCommand(new ShareData());
$executioner->setCommand(new Authenticate());
$executioner->setCommand(new Debit());
$executioner->setCommand(new Acknowledge());

$executioner->runCommands();
