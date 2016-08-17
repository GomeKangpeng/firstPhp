<?php
	// bool define(string $name, mixed $value [,bool $case_insensitive = false])
	// 区分大小写的常量名
	define("GREETING", "欢迎访问W3cschool");
	echo GREETING;
	echo "<br>";
?>

<?php 
	// print this string ignore the case忽略变量的大小写
	define("GREETING", "欢迎访问W3cschool",true);
	echo GREETING;
	echo greeting;
?>
<?php 
	// 常量是全局的，可以在脚本中打印出常量值,常量已经定义之后，不能再重新定义
	define("GREETING1", "欢迎访问W3cschool");
	function myTest(){
		echo GREETING1;
	}
	myTest();
?>