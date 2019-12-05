<?php

//红头鸭

require_once './fly/FlyWithWings.php';
require_once './quack/Quack.php';

class RedHeadDuck extends Duck {
 
	public function __construct() {
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
 
	public function display() {
		echo "I'm a real Red Headed duck<br>";
	}
}
