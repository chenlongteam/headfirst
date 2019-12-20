<?php

abstract class PizzaStore {
 
	abstract function createPizza(String $item);
 
	public function orderPizza(String $type) {
		$pizza = $this->createPizza($type);//Pizza
		echo "--- Making a " . $pizza->getName() . " --- <br>\n";
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
