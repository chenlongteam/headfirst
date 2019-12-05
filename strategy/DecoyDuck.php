<?php
//诱饵鸭子

require_once 'fly/FlyNoWay.php';
require_once 'quack/MuteQuack.php';
class DecoyDuck extends Duck {

	public function __construct() {
		$this->setFlyBehavior(new FlyNoWay());
		$this->setQuackBehavior(new MuteQuack());
	}
	public function display() {
		echo "I'm a duck Decoy<br>";
	}
}
