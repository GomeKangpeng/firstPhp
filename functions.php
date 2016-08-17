<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php

	function writeName($fname) {
		echo $fname . ' Refsnes.<br>';
	}
	echo "my name is ";
	writeName ( 'kangpeng' );
	echo "my girlFriend name is ";
	writeName ( 'wangrui' );
	?>
	
	<?php
	
	echo "<hr>";
	function add($num1, $num2) {
		return $num1 + $num2;
	}
	echo "500 + 20= ".add(500, 20);
	echo "<br>";
	
	
	?>
	<?php 
	
	echo "this line is ".__LINE__."行<br>";
	echo "this file is ".__FILE__."<br>";
	echo "this dir is ".__DIR__."<br>";
	?>
	
	</body>
</html>