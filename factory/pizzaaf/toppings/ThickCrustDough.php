<?php

require_once 'toppings/Dough.php';
class ThickCrustDough implements Dough {
	public function __toString() {
		return "ThickCrust style extra thick crust dough";
	}
}
