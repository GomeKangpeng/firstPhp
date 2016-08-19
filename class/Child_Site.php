<?php

class Child_Site extends Site {
	var $category;
	function setCategory($par) {
		$this->category = $par;
	}
	function getCategory(){
		echo $this->category.PHP_EOL;
	}
}
$obj = new Child_Site(张无忌);
$obj->getCategory();
?>