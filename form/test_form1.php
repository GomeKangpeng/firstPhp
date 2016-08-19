<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
// 定义变量并默认设置为空值
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
function test_input($data) {
	$data = trim ( $data );
	$data = stripslashes ( $data );
	$data = htmlspecialchars ( $data );
	return $data;
}
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	if (empty ( $_POST ["name"] )) {
		$nameErr = "名字是必需的。";
	} else {
		$name = test_input ( $_POST ["name"] );
	}
	if (empty ( $_POST ["email"] )) {
		$emailErr = "邮箱是必需的。";
	} else {
		$email = test_input ( $_POST ["email"] );
	}
	
	if (empty ( $_POST ["website"] )) {
		$website = "";
	} else {
		$website = test_input ( $_POST ["website"] );
	}
	
	if (empty ( $_POST ["comment"] )) {
		$comment = "";
	} else {
		$comment = test_input ( $_POST ["comment"] );
	}
	
	if (empty ( $_POST ["gender"] )) {
		$genderErr = "性别是必需的。";
	} else {
		$gender = test_input ( $_POST ["gender"] );
	}
}
?>
	<form method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td><label>名字:</label></td>
				<td><input type="text" name="name" value="<?php echo $name?>" /><span class="error">* <?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td><label>E-mail:</label></td>
				<td><input type="email" name="email" /><span class="error">* <?php echo $emailErr;?></span></td>
			</tr>
			<tr>
				<td><label>网址:</label></td>
				<td><input type="url" name="website" /> <span class="error"><?php echo $websiteErr;?></span></td>
			</tr>
			<tr>
				<td style="vertical-align: top;"><label>备注:</label></td>
				<td><textarea name="comment" rows="5" cols="40"></textarea></td>
			</tr>
			<tr>
				<td><label>性别:</label></td>
				<td><input type="radio" name="gender" value="famail"><label>男</label><input
					type="radio" name="gender" value="mail"><label>女</label><span
					class="error">* <?php echo $genderErr;?></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>

</body>
</html>