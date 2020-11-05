<?php

require_once './vendor/autoload.php';

/**
 * @see https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php
 */
$instance = SingletonConnect::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = SingletonConnect::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = SingletonConnect::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

