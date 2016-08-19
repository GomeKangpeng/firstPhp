<?php
class Site {
	var $name = "Site";
	function __construct($par) {
		echo "构造对象" . $par . PHP_EOL;
		$this->name = $par;
	}
	function __destruct() {
		echo "销毁对象" . $this->name . "\n";
	}
}
$obj = new Site ( "张无忌" );
?>