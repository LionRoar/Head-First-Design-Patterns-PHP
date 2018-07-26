<?php

require_once './vendor/autoload.php';

/* Register our filter with PHP */
stream_filter_register("strtolower", LowerCaseInputStream::class)
    or die("Failed to register filter");

$fp = fopen("test.txt", "r");
/* Attach the registered filter to the stream just opened */
stream_filter_append($fp, "strtolower");
/* Read the contents back out
*/

echo stream_get_contents($fp);
