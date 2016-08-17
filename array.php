<?php
	$cars = array("Volvo","BMW","Toyota");
	echo "hello,everyone! I like ".$cars[0].",".$cars[1].",".$cars[2];
	echo PHP_EOL;
	echo "this array.length is ".count($cars);
	echo "<br>";
	for ($x=0,$length=count($cars);$x<$length;$x++){
		echo $cars[$x];
		echo "<br>";
	}
	$age = array("peter"=>"19","andy"=>"20","lucy"=>"24");
	echo "peter is ".$age['peter']." years old<br>";
	
	foreach ($age as $x=>$x_value){
		echo "the Key is ".$x." and the value is ".$x_value;
		echo "<br>";
	}
?>