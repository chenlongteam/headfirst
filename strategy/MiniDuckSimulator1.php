<?php

require_once './quack/Quack.php';
require_once './Duck.php';
require_once './RedHeadDuck.php';
require_once './MallardDuck.php';
require_once './RubberDuck.php';
require_once './ModelDuck.php';
require_once './DecoyDuck.php';
require_once './fly/FlyRocketPowered.php';

class MiniDuckSimulator1 {
 
	public static function run() {
 
		$mallard = new MallardDuck();
		$mallard->performQuack();
		$mallard->performFly();
   
		$model = new ModelDuck();
		$model->performFly();
		$model->setFlyBehavior(new FlyRocketPowered());
		$model->performFly();

	}
}
MiniDuckSimulator1::run();