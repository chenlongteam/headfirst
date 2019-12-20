<?php

class DependentPizzaStore {
 
	public function createPizza(String $style, String $type) {
		$pizza = null;
		if ($style == "NY") {
			if ($type == "cheese") {
				$pizza = new NYStyleCheesePizza();
			} else if ($type == "veggie") {
				$pizza = new NYStyleVeggiePizza();
			} else if ($type == "clam") {
				$pizza = new NYStyleClamPizza();
			} else if ($type == "pepperoni") {
				$pizza = new NYStylePepperoniPizza();
			}
		} else if ($style == "Chicago") {
			if ($type == "cheese") {
				$pizza = new ChicagoStyleCheesePizza();
			} else if ($type == "veggie") {
				$pizza = new ChicagoStyleVeggiePizza();
			} else if ($type == "clam") {
				$pizza = new ChicagoStyleClamPizza();
			} else if ($type == "pepperoni") {
				$pizza = new ChicagoStylePepperoniPizza();
			}
		} else {
			echo "Error: invalid type of pizza <br>\n";
			return null;
		}
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
