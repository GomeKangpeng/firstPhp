<?php
	class phpclass{
		var $var1;
		var $var2 = "constant string";
		static function myfunc($arg1,$arg2){
			echo "你好,PHP<br>";
			echo $arg1.'<br>';
			echo $arg2;
		}
	}
	$obj = new phpclass();
	echo $obj::myfunc("hh","pp");
?>