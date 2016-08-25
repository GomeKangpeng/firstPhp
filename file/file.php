<html>
<body>
	<h1>welcome.txt 文件中的内容为</h1>
<?php
$file = fopen ( "welcome.txt", "r" ) or exit ( "Unable to open file!" );
// 读取文件每一行，直到文件结尾
while ( ! feof ( $file ) ) {
	echo fgets ( $file ) . "<br>";
}
fclose ( $file );
?>

</body>
</html>