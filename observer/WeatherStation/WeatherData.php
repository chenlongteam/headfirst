<?php

require_once './Subject.php';

class WeatherData implements Subject {

	private $observers;
	private $temperature;
	private $humidity;
	private $pressure;
	
	public function __construct() {
		$this->observers = [];
	}
	
	public function registerObserver(Observer $o) {
		$this->observers[] = $o;
	}

	public function removeObserver(Observer $o) {
        $i = array_search($o, $this->observers);
		if($i !== false)
        {
            unset($this->observers[$i]);
        }
	}

	public function notifyObservers() {
		for ($i = 0; $i < count($this->observers); $i++) {
			$observer = $this->observers[$i];
			$observer->update($this->temperature, $this->humidity, $this->pressure);
		}
	}
	
	public function measurementsChanged() {
		$this->notifyObservers();
	}
	
	public function setMeasurements(float $temperature, float $humidity, float $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}
	
	// other WeatherData methods here
	
	public function getTemperature() {
		return $this->temperature;
	}
	
	public function getHumidity() {
		return $this->humidity;
	}
	
	public function getPressure() {
		return $this->pressure;
	}
}
