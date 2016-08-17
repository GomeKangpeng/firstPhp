<?php
namespace namespacename;
class classname{
	function __construct(){
		echo __METHOD__,PHP_EOL;
	}
}
function funcname(){
	echo __FUNCTION__,PHP_EOL;
}
const constname  = 'namespaced';
include 'example1.php';
$a = 'classname';
$obj = new $a;
$b = 'funcname';
$b();
echo constant('constname'),PHP_EOL;


$a = '\namespacename\classname';
$obj = new $a;
$b = '\namespacename\funcname';
$b();

echo constant('namespacename\constname'),PHP_EOL;
?>