<?php
	// 获取当前日期的小时数,如果小时数小于20,输出having a good day
	$t = date("H");
	echo $t,PHP_EOL;
	if ($t<3){
		echo "having a good day";
	}else{
		echo "having a good afternoon";
	}
?>