<?php

class HeatIndexDisplay extends DisplayElement {

    private $temperature;
    private $humidity;
    private $heatIndex;

    public function update(SplSubject $subject)
    {
        $data = $subject->getWeatherData();
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];

        $this->heatIndex = $this->computeHeatIndex(
            $this->temperature,
            $this->humidity
        );
        $this->display();

    }
    public function display(){
        echo "\n+++++HEAT_INDEX+++++\n"
            . $this->heatIndex
            . "\n++++++++++++++++++++\n";
    }

/**
 * How does it work? You’d have to refer to Head First Meteorology, or try asking someone at the National
 * Weather Service (or try a Google search).
 * (I don't know either :P )
 * @param float $t temperature
 * @param float $rh humidity
 * @return float
 */
    private function computeHeatIndex(float $t, float $rh) : float {
        $index = ((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) +
            (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) +
            (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
            (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 *
            ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) +
            (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
            0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
            (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
        return $index;
    }
}