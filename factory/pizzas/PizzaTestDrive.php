<?php

require_once 'SimplePizzaFactory.php';
require_once 'PizzaStore.php';
class PizzaTestDrive {
 
	public static function run () {
		$factory = new SimplePizzaFactory();//SimplePizzaFactory
		$store = new PizzaStore($factory);//PizzaStore

		$pizza = $store->orderPizza("cheese"); //Pizza
		echo "We ordered a " . $pizza->getName() . "<br><br>\n\n";
 
		$pizza = $store->orderPizza("veggie");
		echo "We ordered a " . $pizza->getName() . "<br><br>\n\n";
	}
}

PizzaTestDrive::run();


/*
 *
output:

Preparing Cheese Pizza
Baking Cheese Pizza
Cutting Cheese Pizza
Boxing Cheese Pizza
We ordered a Cheese Pizza

Preparing Veggie Pizza
Baking Veggie Pizza
Cutting Veggie Pizza
Boxing Veggie Pizza
We ordered a Veggie Pizza

 *
 */