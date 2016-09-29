<?php
class customException extends Exception {
	public function errorMessage() {
		$errorMsg = '错误行号: '.$this->getLine().'<br>in '.$this->getFile().':<b>'.$this->getMessage()
		.'</b> 不是一个合法的Email地址';
		return  $errorMsg;
	}
}

$email = 'tony_kanper@hotmail....com';
try {
	if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
		throw new customException($email);
	}
} catch (Exception $e) {
	echo $e->errorMessage();
}
?>