<?php
namespace site;
class Site {
	var $url;
	var $title;
	function setUrl($par) {
		$this->url = $par;
	}
	function getUrl() {
		echo $this->url, PHP_EOL;
	}
	function setTitle($par) {
		$this->title = $par;
	}
	function getTitle() {
		echo $this->title, PHP_EOL;
	}
}
$obj = new Site();
$obj->setUrl('www.runoob.com');
$obj->getUrl();

?>