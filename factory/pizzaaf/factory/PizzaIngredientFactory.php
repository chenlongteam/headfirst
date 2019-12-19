<?php

//原料工厂
interface PizzaIngredientFactory {
 
	public function createDough();
	public function createSauce();
	public function createCheese();
	public function createVeggies();
	public function createPepperoni();
	public function createClam();
 
}
