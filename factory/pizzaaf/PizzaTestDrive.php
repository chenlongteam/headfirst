<?php

require_once './PizzaStore.php';
require_once './NYPizzaStore.php';
require_once './ChicagoPizzaStore.php';
class PizzaTestDrive {
 
	public static function run() {
		$nyStore = new NYPizzaStore();
		$chicagoStore = new ChicagoPizzaStore();
 
		$pizza = $nyStore->orderPizza("cheese");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("cheese");
		echo "Joel ordered a " . $pizza . "<br>\n";

		$pizza = $nyStore->orderPizza("clam");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("clam");
		echo "Joel ordered a " . $pizza . "<br>\n";

		$pizza = $nyStore->orderPizza("pepperoni");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("pepperoni");
		echo "Joel ordered a " . $pizza . "<br>\n";

		$pizza = $nyStore->orderPizza("veggie");
		echo "Ethan ordered a " . $pizza . "<br>\n";
 
		$pizza = $chicagoStore->orderPizza("veggie");
		echo "Joel ordered a " . $pizza . "<br>\n";
	}
}

PizzaTestDrive::run();
