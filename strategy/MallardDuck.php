<?php

//绿头鸭

require_once './fly/FlyWithWings.php';
require_once './quack/Quack.php';

class MallardDuck extends Duck {
 
	public function __construct() {
 
		$this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
	}
 
	public function display() {
		echo "I'm a real Mallard duck<br>";
	}

	public function xxx() {
		echo "wocao<br>";
	}
}
