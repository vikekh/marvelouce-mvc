<?php

class HelloWorldController extends Controller {
	public function __construct($title) {
		parent::__construct($title);
	}
	
	public function index() {
		require 'app/views/hello_world/index.php';
	}
}
