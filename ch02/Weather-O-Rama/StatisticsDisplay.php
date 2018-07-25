<?php

class StatisticsDisplay extends DisplayElement {
    private $temperature;


    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->display();
    }
    public function display()
    {
        echo "\nSTATS: AVG/MAX/MIN TEMPERATURE: $this->temperature\n";;
    }
}
