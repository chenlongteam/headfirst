<?php

require_once 'toppings/ThinCrustDough.php';
require_once 'toppings/MarinaraSauce.php';


require_once 'cheese/ReggianoCheese.php';
require_once 'pepperoni/SlicedPepperoni.php';
require_once 'clam/FreshClams.php';

require_once 'veggies/BlackOlives.php';
require_once 'veggies/Eggplant.php';
require_once 'veggies/Garlic.php';
require_once 'veggies/Mushroom.php';
require_once 'veggies/Onion.php';
require_once 'veggies/RedPepper.php';
require_once 'veggies/Spinach.php';


require_once 'PizzaIngredientFactory.php';
class NYPizzaIngredientFactory implements PizzaIngredientFactory {
 
	public function createDough() {
		return new ThinCrustDough();
	}
 
	public function createSauce() {
		return new MarinaraSauce();
	}
 
	public function createCheese() {
		return new ReggianoCheese();
	}
 
	public function createVeggies() {
		$veggies = [ new Garlic(), new Onion(), new Mushroom(), new RedPepper() ];
		return $veggies;
	}
 
	public function createPepperoni() {
		return new SlicedPepperoni();
	}

	public function createClam() {
		return new FreshClams();
	}
}
