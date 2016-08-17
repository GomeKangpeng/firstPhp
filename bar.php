<?php

namespace Foo\Bar;

include 'subnamespace.php';
const FOO = 2;
function foo() {
}
class foo {
	static function staticMethod() {
	}
}
foo (); // 解析为当前空间下的function foo(){}
foo::staticMethod (); // 解析为当前空间下的class foo 下的静态方法
echo FOO; // 解析为当前命名空间下的常量FOO

subnamespace\foo (); // 解析为subnamespace空间下的foo(){}方法
subnamespace\foo::staticMethod (); // 解析为subnamespace下的foo类的静态方法
echo subnamespace\Foo;// 解析我诶subnamespace下的Foo常量

\Foo\Bar\foo(); // 完全限定了空间名

?>

