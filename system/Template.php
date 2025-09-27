<?php
namespace system;
class Template {

	protected $layout;

	public function __construct($layout){
		$this->layout = $layout;
	}

	function render($template,$values = array()){
		extract($values);
		require_once VIEWS_PATH . $this->layout .'.php';
	}
}
