<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td><label>名字:</label></td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td><label>E-mail:</label></td>
				<td><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td><label>网址:</label></td>
				<td><input type="url" name="website" /></td>
			</tr>
			<tr>
				<td style="vertical-align: top;"><label>备注:</label></td>
				<td><textarea name="comment" rows="5" cols="40"></textarea></td>
			</tr>
			<tr>
				<td><label>性别:</label></td>
				<td><input type="radio" name="gender" value="famail"><label>男</label><input
					type="radio" name="gender" value="mail"><label>女</label></td>
			</tr>
			<tr><td></td><td><input type="submit" value="提交"></td></tr>
		</table>
	</form>
	<?php
	// 定义变量并默认设置为空值
	$name = $email = $gender = $comment = $website = "";
	
	if ($_SERVER ["REQUEST_METHOD"] == "POST") {
		$name = test_input ( $_POST ["name"] );
		$email = test_input ( $_POST ["email"] );
		$website = test_input ( $_POST ["website"] );
		$comment = test_input ( $_POST ["comment"] );
		$gender = test_input ( $_POST ["gender"] );
	}
	function test_input($data) {
		$data = trim ( $data );
		$data = stripslashes ( $data );
		$data = htmlspecialchars ( $data );
		return $data;
	}
	?>
</body>
</html>