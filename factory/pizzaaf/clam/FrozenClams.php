<?php

require_once 'Clams.php';
class FrozenClams implements Clams {

	public function __toString() {
		return "Frozen Clams from Chesapeake Bay";
	}
}
