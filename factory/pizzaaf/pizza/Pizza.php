<?php

abstract class Pizza {
	protected $name;

	public $dough;
	public $sauce;
	public $veggies = [];
	public $cheese;
	public $pepperoni;
	public $clam;

	abstract function prepare();

	function bake() {
		echo "Bake for 25 minutes at 350 <br>\n";
	}

	function cut() {
		echo "Cutting the pizza into diagonal slices <br>\n";
	}

	function box() {
		echo "Place pizza in official PizzaStore box <br>\n";
	}

	function setName(String $name) {
		$this->name = $name;
	}

	function getName() {
		return $this->name;
	}

	public function __toString() {
		$result = '';
		$result .= "---- " . $this->name . " ----<br>\n";
		if ($this->dough != null) {
			$result .= $this->dough;
			$result .= "<br>\n";
		}
		if ($this->sauce != null) {
			$result .= $this->sauce;
			$result .= "<br>\n";
		}
		if ($this->cheese != null) {
			$result .= $this->cheese;
			$result .= "<br>\n";
		}
		if ($this->veggies != null) {
			for ($i = 0; $i < count($this->veggies); $i++) {
				$result .= $this->veggies[$i];
				if ($i < count($this->veggies) - 1) {
					$result .= ", ";
				}
			}
			$result .= "<br>\n";
		}
		if ($this->clam != null) {
			$result .= $this->clam;
			$result .= "<br>\n";
		}
		if ($this->pepperoni != null) {
			$result .= $this->pepperoni;
			$result .= "<br>\n";
		}
		return $result;
	}
}
