<?php
	$x=5879;
	var_dump($x);
	echo "<br>";
	$x=-1;
	var_dump($x);
	echo "<br>";
	$x=0x8c;
	var_dump($x);
?>

<?php 
	echo "<br>";
	$cars = array("Volvo","BMW","Toyota");
	var_dump($cars);
?>
<?php 
	class Car{
		var $color;
		function Car($color="green"){
			$this->color = $color;
		}
		function what_color(){
			return $this->color;
		}
	}
?>