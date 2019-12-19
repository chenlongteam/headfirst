<?php

require_once 'Cheese.php';
class MozzarellaCheese implements Cheese {

	public function __toString() {
		return "Shredded Mozzarella";
	}
}
