<?php

class PizzaStore {
	public $factory; //SimplePizzaFactory
 
	public function __construct(SimplePizzaFactory $factory) {
		$this->factory = $factory;
	}
 
	public function orderPizza(String $type) {
		$pizza = null; //Pizza
 
		$pizza = $this->factory->createPizza($type);
 
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();

		return $pizza;
	}

}
