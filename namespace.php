<?php

namespace MyProject {
	const CONNECT_OK = 1;
	class Connection{/**/}
	function connect(){/*some connect code*/}
}
namespace {
	session_start();
	$a = MyProject\connect();
	echo MyProject\CONNECT_OK;
}
?>