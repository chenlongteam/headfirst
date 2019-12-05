<?php

//叫的实现类  呱呱叫
require_once 'QuackBehavior.php';
class Quack implements QuackBehavior {
	public function quack2() {
		echo "Quack<br>";
	}
}
