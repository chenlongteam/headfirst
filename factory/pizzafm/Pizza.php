<?php

abstract class Pizza {
	public $name;
	public $dough;
	public $sauce;
	public $toppings = [];
 
	function prepare() {
		echo "Preparing " . $this->name. "<br>\n";
		echo "Tossing dough...". "<br>\n";
		echo "Adding sauce...". "<br>\n";
		echo "Adding toppings: ". "<br>\n";
		for ($i = 0; $i < count($this->toppings); $i++) {
			echo "   " . $this->toppings[$i]. "<br>\n";
		}
	}
  
	function bake() {
		echo "Bake for 25 minutes at 350 <br>\n";
	}
 
	function cut() {
		echo "Cutting the pizza into diagonal slices <br>\n";
	}
  
	function box() {
		echo "Place pizza in official PizzaStore box <br>\n";
	}
 
	public function  getName() {
		return $this->name;
	}

	public function __toString() {
		$display = '';
		$display .= "---- " . $this->name . " ---- <br>\n";
		$display .= $this->dough . "<br>\n";
		$display .= $this->sauce . "<br>\n";

		for ($i = 0; $i < count($this->toppings); $i++)
		{
			$display .= $this->toppings[$i] . "<br>\n";
		}
		return $display;
	}
}

 
 
