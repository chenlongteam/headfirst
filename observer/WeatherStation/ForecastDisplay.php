<?php

class ForecastDisplay implements Observer, DisplayElement {
	private $currentPressure = 29.92;
	private $lastPressure;
	private $weatherData;

	public function __construct(WeatherData $weatherData) {
		$this->weatherData = $weatherData;
		$this->weatherData->registerObserver($this);
	}

	public function update(float $temp, float $humidity, float $pressure) {
	    $this->lastPressure = $this->currentPressure;
		$this->currentPressure = $pressure;

		$this->display();
	}

	public function display() {
		echo "Forecast: ";
		if ($this->currentPressure > $this->lastPressure) {
			echo "Improving weather on the way!<br>\n";
		} else if ($this->currentPressure == $this->lastPressure) {
			echo "More of the same<br>\n";
		} else if ($this->currentPressure < $this->lastPressure) {
			echo "Watch out for cooler, rainy weather<br>\n";
		}
	}
}
