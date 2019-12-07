<?php

//饮料
abstract class Beverage
{
	public $description = "Unknown Beverage";
  
	public function getDescription() {
		return $this->description;
	}
 
	public abstract function cost();
}
