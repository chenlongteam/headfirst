<?php

require_once 'toppings/ThickCrustDough.php';
require_once 'toppings/PlumTomatoSauce.php';


require_once 'cheese/MozzarellaCheese.php';
require_once 'pepperoni/SlicedPepperoni.php';
require_once 'clam/FrozenClams.php';

require_once 'PizzaIngredientFactory.php';
class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
	public function createDough() {
		return new ThickCrustDough();
	}

	public function createSauce() {
		return new PlumTomatoSauce();
	}

	public function createCheese() {
		return new MozzarellaCheese();
	}

	public function createVeggies() {
		$veggies = [new BlackOlives(), new Spinach(), new Eggplant()];
		return $veggies;
	}

	public function createPepperoni() {
		return new SlicedPepperoni();
	}

	public function createClam() {
		return new FrozenClams();
	}
}
