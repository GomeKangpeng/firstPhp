<?php
	//strpos 可以返回字符串在父串中的位子，如果没有找到，则返回false；
	$txt = "hello world";
	$x = strpos($txt, "world");
	$y = strpos($txt, "wordl");
	echo $x;
	echo var_dump($y);
?>