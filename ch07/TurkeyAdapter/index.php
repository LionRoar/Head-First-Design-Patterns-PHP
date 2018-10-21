<?php

require_once './vendor/autoload.php';
#region use
#endregion

$duck = new MallardDuck();

$turkey = new WildTurkey();

$just_a_normal_duck = new TurkeyAdapter($turkey);


echo "The Turkey says.. \n";
$turkey->gobble();
$turkey->fly();

echo PHP_EOL;

echo "The Duck says.. \n";
$duck->quack();
$duck->fly();

echo PHP_EOL;

echo "The Turkey Adapter says..\n";
legitDuckTest($just_a_normal_duck);

echo PHP_EOL;

function legitDuckTest(Duck $duck){
    $duck->quack();
    $duck->fly();
}


echo "\nwhat does the fox say ?\n";