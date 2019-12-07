<?php
require_once './WeatherData.php';
require_once './CurrentConditionsDisplay.php';
require_once './StatisticsDisplay.php';
require_once './ForecastDisplay.php';
require_once './HeatIndexDisplay.php';

class WeatherStationHeatIndex {

	public static function run() {
		$weatherData = new WeatherData();
		$currentDisplay = new CurrentConditionsDisplay($weatherData);
		$statisticsDisplay = new StatisticsDisplay($weatherData);
		$forecastDisplay = new ForecastDisplay($weatherData);
		$heatIndexDisplay = new HeatIndexDisplay($weatherData);

		$weatherData->setMeasurements(80, 65, 30.4);
		echo "<br>\n";
		$weatherData->setMeasurements(82, 70, 29.2);
		echo "<br>\n";
		$weatherData->setMeasurements(78, 90, 29.2);
		echo "<br>\n";

		echo "<br>\nafter remove three observers<br>\n<br>\n";
		$weatherData->removeObserver($currentDisplay);
		$weatherData->removeObserver($statisticsDisplay);
		$weatherData->removeObserver($forecastDisplay);

		$weatherData->setMeasurements(90, 100, 30.2);
	}
}

WeatherStationHeatIndex::run();