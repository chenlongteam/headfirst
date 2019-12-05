<?php

//不会叫
require_once 'QuackBehavior.php';
class MuteQuack implements QuackBehavior {
	public function quack2() {
		echo "<< Silence >><br>";
	}
}
