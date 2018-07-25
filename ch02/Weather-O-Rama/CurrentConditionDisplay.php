<?php

class CurrentConditionDisplay extends DisplayElement {
    private $temperature;
    private $humidity;

    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];
        $this->display();
    }
    public function display()
    {
        echo "\nCurrent condition: $this->temperature"."F degree and".
             " Humidity $this->humidity%\n";
    }
}
