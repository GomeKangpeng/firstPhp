<?php
	class classname{
		function __construct(){
			echo __METHOD__,PHP_EOL;
		}
	}
	function funcname(){
		echo __FUNCTION__,PHP_EOL;
	}
	const constname = 'global';
	$a = 'classname';
	$obj = new $a;
	$b = 'funcname';
	$b();
	echo constant('constname'),PHP_EOL;
?>