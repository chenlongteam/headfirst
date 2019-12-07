<?php

//叫的实现类  吱吱叫
require_once 'QuackBehavior.php';
class Squeak implements QuackBehavior {
	public function quack2() {
		echo "Squeak<br>\n";
	}
}
