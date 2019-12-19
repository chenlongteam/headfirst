<?php

require_once 'Pepperoni.php';
class SlicedPepperoni implements Pepperoni {

	public function __toString() {
		return "Sliced Pepperoni";
	}
}
