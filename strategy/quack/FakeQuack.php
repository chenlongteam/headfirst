<?php

//假鸭子
require_once 'QuackBehavior.php';
class FakeQuack implements QuackBehavior {
	public function quack2() {
		echo "Qwak<br>";
	}
}
