<?php
	$x = array("a"=>"red","b"=>"green");
	$y = array("c"=>"yellow","d"=>"black");
	$z = $x+$y;
	var_dump($z);
	// 相等的键值对就返回true，否则false
	var_dump($x==$y);
	// 相等的键值对并且具有相同的顺序返回true，否则返回false
	var_dump($x===$y);
	// x和y不相等
	var_dump($x!=$y);
	// x和y不相等
	var_dump($x<>$y)
?>
	
<?php 
	// isset表示是否设置
	$test = '你好，中国';
	$username = isset($test) ? $test:'nobody';
	echo $username,PHP_EOL;
?>	
<?php 
	// 在php中三目运算符可以简写
	$words = "你好，世界";
	$username = $words?:'nobody';
	echo $username,PHP_EOL;
?>

<?php 
	// php7支持差值比较符 <=>
	echo 1 <=> 1;	

?>