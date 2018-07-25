<?php
require_once './vendor/autoload.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionDisplay($weatherData);
$statsDisplay = new StatisticsDisplay($weatherData);
$forecast = new ForecastDisplay($weatherData);
$heatIndex = new HeatIndexDisplay($weatherData);

$data  = array(
    "temperature"=> 80,
    "humidity" => 65,
    "pressure"=>30.5
);

$weatherData->setWeatherData($data);