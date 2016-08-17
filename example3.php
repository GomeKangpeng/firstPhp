<?php
// 使用__NAMESPACE__动态创建名称
namespace MyProject;

function get($classname) {
	$a = __NAMESPACE__ . '\\' . $classname;
	return new $a ();
}
?>