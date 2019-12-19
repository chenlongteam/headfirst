<?php

require_once 'toppings/Dough.php';
class ThinCrustDough implements Dough {
	public function __toString() {
		return "Thin Crust Dough";
	}
}
