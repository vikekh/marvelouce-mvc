<?php

class HelloWorldController extends Controller {

	public function __construct($title) {
		parent::__construct($title);
	}
	
	public function index() {
		require 'app/views/hello_world/index.php';
	}

	public function moon() {
		require 'app/views/hello_world/moon.php';
	}

	public function name($name = null) {
		$this->data['name'] = $name !== null ? ucfirst($name) : null;
		extract($this->data);
		require 'app/views/hello_world/name.php';
	}

	public function venusAndMars() {
		require 'app/views/hello_world/venus_and_mars.php';
	}
	
}