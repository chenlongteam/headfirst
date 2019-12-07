<?php

//低因咖啡 (脱咖啡因咖啡)
require_once './Beverage.php';
class Decaf extends Beverage {

	public function __construct() {
		$this->description = "Decaf Coffee";
	}
 
	public function cost() {
		return 1.05;
	}
}

