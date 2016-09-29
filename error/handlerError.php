<?php
function customError($errno, $errstr) {
	echo "<b>Error:</b> [$errno] $errstr<br>";
	echo "脚本结束";
	die ();
}
set_error_handler("customError");
echo ($test);
?>