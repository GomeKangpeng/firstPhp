<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
echo "Hello World！"?>
<?php
// 这是一条注释
/*
 * 这是多行注释
 */
$x = 5+/*这是代码中间的注释*/+ 5;
echo $x;
?>
<?php

ECHo "Hello World!1";
EcHO "Hello World!2";
ECHO "Hello World!3"?>

<?php
$color = "red";
echo "my car is " . $color . "<br>";
// echo "my car is " .$Color. "<br>";
// echo "my car is " .$COLOR. "<br>";

?>
<?php

$txt = "Hello World!";
$x = 5;
$y = 10.5;

echo $x + $y;
echo "<br>"?>
<?php

$txt = "I love rui";
echo "kp says:" . $txt . "!";

?>
<?php 
	$x=5;
	$y=10;
	function showX(){
		global $x,$y;
		$x=$x+$y;
	}
	showX();
	echo $x;
	echo "<br>"
?>
<?php 
	function myTest(){
		static $x = 0;
		echo $x;
		$x++;
	}
	myTest();
	myTest();
	myTest();
?>

</body>
</html>