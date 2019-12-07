<?php

//模型鸭子

require_once './fly/FlyNoWay.php';
require_once './quack/Quack.php';

class ModelDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
	}

	public function display() {
		echo "I'm a model duck<br>\n";
	}
}
