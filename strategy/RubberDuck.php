<?php

//橡皮鸭子

require_once './fly/FlyNoWay.php';
require_once './quack/Squeak.php';


class RubberDuck extends Duck {
 
	public function __construct() {
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Squeak();
	}
 
	public function display() {
		echo "I'm a rubber duckie<br>";
	}
}
