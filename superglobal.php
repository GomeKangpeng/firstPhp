<?php
/*
 * $GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。
 * $GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。
 */
$x = 75;
$y = 25;
function addition() {
	$GLOBALS ['z'] = $GLOBALS ['x'] + $GLOBALS ['y'];
}
addition ();
echo $z,PHP_EOL."<br>";


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['SERVER_SIGNATURE'];
?>