<?php

abstract class Controller {
	protected $data;
	protected $template;
	
	public function __construct($title) {
		$this->data['title'] = $title;
		$this->template = 'default';
	}
	
	public function feet() {
		require 'app/templates/' . $this->template . '/feet.php';
	}
	
	public function head() {
		extract($this->data);
		require 'app/templates/' . $this->template . '/head.php';
	}
	
	abstract public function index();
}
