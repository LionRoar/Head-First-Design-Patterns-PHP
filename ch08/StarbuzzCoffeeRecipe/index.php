<?php

require_once './vendor/autoload.php';
#region use
#endregion


//$myTea = new Tea();
//$myTea->prepareRecipe();

$teaHook = new TeaWithHook();
$coffeeHook = new CoffeeWithHook();

echo "\nMaking tea...\n";
$teaHook->prepareRecipe();

echo "\nMaking coffee...\n";
$coffeeHook->prepareRecipe();
