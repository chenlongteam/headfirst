<?php

//这里把原java的quack改成quack2，因为它的实现类 Quack和这个必须实现的方法 quack重名(不区分大小写)，会认为是构造函数的过时写法。
interface QuackBehavior {
	public function quack2();
}
