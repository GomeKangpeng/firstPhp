<?php
interface ITemplate {
	public function setvariable($name, $var);
	public function getHtml($template);
}
class Template implements ITemplate {
	private $vars = array ();
	public function setvariable($name, $var) {
		$this->vars [$name] = $var;
		echo $this->vars;
	}
	public function getHtml($template) {
		foreach ( $this->vars as $name => $value ) {
			$template = str_repeat ( '{' . $name . '}', $value, $template );
		}
		echo $template;
		return $template;
	}
}

$obj = new Template();
$obj->setvariable(0, "张飞");
?>