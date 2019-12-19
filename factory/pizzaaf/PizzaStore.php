<?php

abstract class PizzaStore {
 
	protected abstract function createPizza(String $item);
 
	public function orderPizza(String $type) {
		$pizza = $this->createPizza($type);
		echo "--- Making a " . $pizza->getName() . " ---<br>\n";
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
