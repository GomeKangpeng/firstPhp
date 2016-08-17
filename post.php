<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		Name:<input type="text" name="fname"> 
		<input type="submit" value="submit">
	</form>
	<?php 
		$name = isset($_POST['fname'])?$_POST['fname']:'';
		echo $name;
	?>
</body>
</html>