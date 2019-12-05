<?php

abstract class Duck {
	public $flyBehavior; //FlyBehavior
	public $quackBehavior; //QuackBehavior
 
	public function __construct() {
	}
 
	public function setFlyBehavior (FlyBehavior $fb) {
		$this->flyBehavior = $fb;
	}
 
	public function setQuackBehavior(QuackBehavior $qb) {
		$this->quackBehavior = $qb;
	}
 
	abstract function display();
 
	public function performFly() {
		$this->flyBehavior->fly();
	}
 
	public function performQuack() {
		$this->quackBehavior->quack2();
	}
 
	public function swim() {
		echo "All ducks float, even decoys!<br>";
	}
}
