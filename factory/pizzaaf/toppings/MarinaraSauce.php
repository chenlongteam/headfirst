<?php

require_once 'toppings/Sauce.php';
class MarinaraSauce implements Sauce {
	public function __toString() {
		return "Marinara Sauce";
	}
}
