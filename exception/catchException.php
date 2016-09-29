<?php
function checkNum($number){
	if($number<1){
		throw new Exception("value mush be 1 or below!");
	}
	return true;
}
try {
	checkNum(0);
	echo "如果抛出异常，以下文本不会输出";
} catch (Exception $e) {
	echo "Exception Message: ".$e->getMessage();
}


?>