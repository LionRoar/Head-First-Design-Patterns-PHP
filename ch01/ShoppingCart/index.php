<?php

require_once './vendor/autoload.php';

$cart = new ShoppingCart();

$item1 = new Item('4545', 10);
$item2 = new Item('5656', 40);

$cart->addItem($item1);
$cart->addItem($item2);

$cart->pay(new PaypalStrategy('example@example.com','mypsswd'));

$cart->removeItem($item2);

$cart->pay(new CreditCardStrategy('leone ateniese', '45568888888900','555','12/01'));


