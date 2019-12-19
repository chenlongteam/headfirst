<?php

require_once 'Pizza.php';
class  ClamPizza extends Pizza {
	public $ingredientFactory;
 
	public function __construct(PizzaIngredientFactory $ingredientFactory) {
		$this->ingredientFactory = $ingredientFactory;
	}
 
	function prepare() {
		echo "Preparing " . $this->name."<br>\n";
		$this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
		$this->cheese = $this->ingredientFactory->createCheese();
		$this->clam = $this->ingredientFactory->createClam();
	}
}
