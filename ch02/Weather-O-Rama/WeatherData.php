<?php
/**
 * * Implements built-in subject(publisher) interface SplSubject
 * see:  http://php.net/manual/en/class.splsubject.php
 */
class WeatherData implements SplSubject {
    private $temperature;
    private $humidity;
    private $pressure;

    private $observers = array();

    public function attach(SplObserver $observer)
    {   /**
         * spl_object_hash
         * This function returns a unique identifier for the object.
         */
        $uid = spl_object_hash($observer);
        $this->observers[$uid] = $observer;

    }

    public function detach(SplObserver $observer)
    {
        $uid = spl_object_hash($observer);
        unset($this->observers[$uid]);

    }

    public function notify()
    {
     foreach($this->observers as $observer){
        $observer->update($this);
     }
    }

    public function setWeatherData(array $data){
        $this->temperature = $data["temperature"];
        $this->humidity = $data["humidity"];
        $this->pressure = $data["pressure"];
        $this->notify();
    }

    public function getWeatherData() : array {
        return array(
            "temperature" => $this->temperature,
            "humidity" => $this->humidity,
            "pressure" => $this->pressure
        );
    }

}