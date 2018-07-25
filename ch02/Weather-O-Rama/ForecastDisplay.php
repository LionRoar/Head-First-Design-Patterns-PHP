<?php

class ForecastDisplay extends DisplayElement {
    private $temperature;
    private $humidity;
    private $pressure;

    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];
        $this->pressure = $data["pressure"];
        $this->display();
    }
    public function display()
    {
        echo "\n~~~~Forecast~~~~\n".
             "$this->temperature"."F degree and".
             " Humidity $this->humidity% also Pressure is $this->pressure".
             "Pa\n~~~~~~~~~~~~~~~~\n";
    }
}
