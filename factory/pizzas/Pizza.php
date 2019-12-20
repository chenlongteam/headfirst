<?php

abstract class Pizza {
	public $name;
	public $dough;
	public $sauce;
	public $toppings = [];

	public function getName() {
		return $this->name;
	}

	public function prepare() {
		echo "Preparing " . $this->name . "<br>\n";
	}

	public function bake() {
		echo "Baking " . $this->name . "<br>\n";
	}

	public function cut() {
		echo "Cutting " . $this->name . "<br>\n";
	}

	public function box() {
		echo "Boxing " . $this->name . "<br>\n";
	}

	public function __toString() {
		// code to display pizza name and ingredients
		$display = '';
		$display .= "---- " . $this->name . " ----<br>\n";
		$display .= $this->dough . "<br>\n";
		$display .= $this->sauce . "<br>\n";
		for ($i = 0; $i < count($this->toppings); $i++) {
			$display .= $this->toppings[$i] . "<br>\n";
		}
		return $display;
	}
}

