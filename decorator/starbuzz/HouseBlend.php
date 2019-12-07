<?php

//混合搅拌的意思，是北美特别流行的黑咖啡，它属于混合咖啡。
//咖啡-综合咖啡
require_once './Beverage.php';
class HouseBlend extends Beverage
{
	public function __construct() {
		$this->description = "House Blend Coffee";
	}
 
	public function cost() {
		return 0.89;
	}
}

